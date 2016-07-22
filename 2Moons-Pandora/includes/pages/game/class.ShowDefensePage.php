<?php

/**
 *  2Moons
 *  Copyright (C) 2012 Jan Kr�pke
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package 2Moons
 * @author Jan Kr�pke <info@2moons.cc>
 * @copyright 2012 Jan Kr�pke <info@2moons.cc>
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 1.7.2 (2013-03-18)
 * @info $Id: class.ShowShipyardPage.php 2632 2013-03-18 19:05:14Z slaver7 $
 * @link http://2moons.cc/
 */
 

class ShowDefensePage extends AbstractPage
{
	public static $requireModule = 0;
	
	public static $defaultController = 'show';

	function __construct() 
	{
		parent::__construct();
	}
	
	private function CancelAuftr() 
	{
		global $USER, $PLANET, $resource, $CONF;
		$ElementQueue = unserialize($PLANET['b_defense_id']);
		
		$CancelArray	= HTTP::_GP('auftr', array());
		
		if(!is_array($CancelArray))
		{
			return false;
		}	
		
		foreach ($CancelArray as $Auftr)
		{
			if(!isset($ElementQueue[$Auftr])) {
				continue;
			}
			
			if($Auftr == 0) {
				$PLANET['b_defense']	= 0;
			}
			
			$Element		= $ElementQueue[$Auftr][0];
			$Count			= $ElementQueue[$Auftr][1];
			
			
			$costRessources	= BuildFunctions::getElementPrice($USER, $PLANET, $Element, false, $Count);
		
			if(isset($costRessources[901])) { $PLANET[$resource[901]]	+= $costRessources[901] * FACTOR_CANCEL_DEFENSE; }
			if(isset($costRessources[902])) { $PLANET[$resource[902]]	+= $costRessources[902] * FACTOR_CANCEL_DEFENSE; }
			if(isset($costRessources[903])) { $PLANET[$resource[903]]	+= $costRessources[903] * FACTOR_CANCEL_DEFENSE; }
			if(isset($costRessources[921])) { $USER[$resource[921]]		+= $costRessources[921] * FACTOR_CANCEL_DEFENSE; }
			
			unset($ElementQueue[$Auftr]);
		}
		
		if(empty($ElementQueue)) {
			$PLANET['b_defense_id']	= '';
		} else {
			$PLANET['b_defense_id']	= serialize(array_values($ElementQueue));
		}
	}
	
	private function BuildAuftr($fmenge)
	{
		global $USER, $PLANET, $reslist, $CONF, $resource;	
		
		$Missiles	= array(
			502	=> $PLANET[$resource[502]],
			503	=> $PLANET[$resource[503]],
		);

		foreach($fmenge as $Element => $Count)
		{
			if(empty($Count)
				|| !in_array($Element, array_merge($reslist['defense'], $reslist['missile']))
				|| !BuildFunctions::isTechnologieAccessible($USER, $PLANET, $Element)
			) {
				continue;
			}
			
			$MaxElements 	= BuildFunctions::getMaxConstructibleElements($USER, $PLANET, $Element);
			$Count			= is_numeric($Count) ? round($Count) : 0;
			$Count 			= max(min($Count, Config::get('max_defense_per_build')), 0);
			$Count 			= min($Count, $MaxElements);
			
			$BuildArray    	= !empty($PLANET['b_defense_id']) ? unserialize($PLANET['b_defense_id']) : array();
			if (in_array($Element, $reslist['missile']))
			{
				$MaxMissiles		= BuildFunctions::getMaxConstructibleRockets($USER, $PLANET, $Missiles);
				$Count 				= min($Count, $MaxMissiles[$Element]);

				$Missiles[$Element] += $Count;
			} elseif(in_array($Element, $reslist['one'])) {
				$InBuild	= false;
				foreach($BuildArray as $ElementArray) {
					if($ElementArray[0] == $Element) {
						$InBuild	= true;
						break;
					}
				}
				
				if ($InBuild)
					continue;

				if($Count != 0 && $PLANET[$resource[$Element]] == 0 && $InBuild === false)
					$Count =  1;
			}
			
			if(empty($Count))
				continue;
						
			$costRessources	= BuildFunctions::getElementPrice($USER, $PLANET, $Element, false, $Count);
		
			if(isset($costRessources[901])) { $PLANET[$resource[901]]	-= $costRessources[901]; }
			if(isset($costRessources[902])) { $PLANET[$resource[902]]	-= $costRessources[902]; }
			if(isset($costRessources[903])) { $PLANET[$resource[903]]	-= $costRessources[903]; }
			if(isset($costRessources[921])) { $USER[$resource[921]]		-= $costRessources[921]; }
			           
			
			$BuildArray[]			= array($Element, $Count);
			$PLANET['b_defense_id']	= serialize($BuildArray);

		}
	}
	
	public function show()
	{
		global $USER, $PLANET, $LNG, $resource, $dpath, $reslist, $CONF;
		
		if ($PLANET[$resource[20]] == 0)
		{
			$this->printMessage($LNG['bd_defense_required']);
		}

		$fmenge	= isset($_POST['fmenge']) ? $_POST['fmenge'] : array();
		$action	= HTTP::_GP('action', '');
								
		$NotBuilding = true;
		if (!empty($PLANET['b_building_id']))
		{
			$CurrentQueue 	= unserialize($PLANET['b_building_id']);
			foreach($CurrentQueue as $ElementArray) {
				if($ElementArray[0] == 20 || $ElementArray[0] == 15) {
					$NotBuilding = false;
					break;
				}
			}
		}
		
		$ElementQueue 	= unserialize($PLANET['b_defense_id']);
		if(empty($ElementQueue))
			$Count	= 0;
		else
			$Count	= count($ElementQueue);
			
		if($USER['urlaubs_modus'] == 0) {
			if (!empty($fmenge) && $NotBuilding == true) {
				if (Config::get('max_elements_defense') != 0 && $Count >= Config::get('max_elements_defense')) {
					$this->printMessage(sprintf($LNG['bd_max_builds'], Config::get('max_elements_defense')));
					exit;
				}
				$this->BuildAuftr($fmenge);
			}
					
			if ($action == "delete") {
				$this->CancelAuftr();
			}
		}
		
		
		$elementInQueue	= array();
		$ElementQueue 	= unserialize($PLANET['b_defense_id']);
		$Buildlist		= array();
		if(!empty($ElementQueue))
		{
			$Defense		= array();
			$QueueTime		= 0;
			foreach($ElementQueue as $Element)
			{
				if (empty($Element))
					continue;
					
				$elementInQueue[$Element[0]]	= true;
				$ElementTime  	= BuildFunctions::getBuildingTime($USER, $PLANET, $Element[0]);
				$QueueTime   	+= $ElementTime * $Element[1];
				$Defense[]		= array($LNG['tech'][$Element[0]], $Element[1], $ElementTime, $Element[0]);		
			}

			$this->tplObj->loadscript('bcmath.js');
			$this->tplObj->loadscript('defense.js');
			$this->tplObj->execscript('DefenseInit();');
			
			$Buildlist	= array(
				'Queue' 					=> $Defense,
				'b_defense_id_plus' 		=> $PLANET['b_defense'],
				'pretty_time_b_defense' 	=> pretty_time(max($QueueTime - $PLANET['b_defense'],0)),
			);
		}
		
		$elementIDs	= array_merge($reslist['defense'], $reslist['missile']);
		
		$Missiles	= array();
		
		foreach($reslist['missile'] as $elementID)
		{
			$Missiles[$elementID]	= $PLANET[$resource[$elementID]];
		}
		
		$MaxMissiles	= BuildFunctions::getMaxConstructibleRockets($USER, $PLANET, $Missiles);
		
		foreach($elementIDs as $Element)
		{
			if(!BuildFunctions::isTechnologieAccessible($USER, $PLANET, $Element))
				continue;
			
			$costRessources		= BuildFunctions::getElementPrice($USER, $PLANET, $Element);
			$costOverflow		= BuildFunctions::getRestPrice($USER, $PLANET, $Element, $costRessources);
			$elementTime    	= BuildFunctions::getBuildingTime($USER, $PLANET, $Element, $costRessources);
			$buyable			= BuildFunctions::isElementBuyable($USER, $PLANET, $Element, $costRessources);
			$maxBuildable		= BuildFunctions::getMaxConstructibleElements($USER, $PLANET, $Element, $costRessources);

			if(isset($MaxMissiles[$Element])) {
				$maxBuildable	= min($maxBuildable, $MaxMissiles[$Element]);
			}
			
			$AlreadyBuild		= in_array($Element, $reslist['one']) && (isset($elementInQueue[$Element]) || $PLANET[$resource[$Element]] != 0);
			
			$elementList[$Element]	= array(
				'id'				=> $Element,
				'available'			=> $PLANET[$resource[$Element]],
				'costRessources'	=> $costRessources,
				'costOverflow'		=> $costOverflow,
				'elementTime'    	=> $elementTime,
				'buyable'			=> $buyable,
				'maxBuildable'		=> floattostring($maxBuildable),
				'AlreadyBuild'		=> $AlreadyBuild,
			);
		}
		
		$this->tplObj->assign_vars(array(
			'elementList'	=> $elementList,
			'NotBuilding'	=> $NotBuilding,
			'BuildList'		=> $Buildlist,
			'maxlength'		=> strlen(Config::get('max_defense_per_build')),
		));

		$this->display('page.defense.default.tpl');
	}
}