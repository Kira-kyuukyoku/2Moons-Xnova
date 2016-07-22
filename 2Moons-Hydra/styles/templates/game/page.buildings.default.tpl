{block name="title" prepend}{$LNG.lm_buildings}{/block}
{block name="content"}

{foreach $Queue as $List}
{$ID = $List.element}<center>

<table style="width:510px;"><tr>
<td width="650" class="left">

{if !($isBusy.research && ($ID == 6 || $ID == 31)) && !($isBusy.shipyard && ($ID == 15 || $ID == 21)) && $RoomIsOk && $CanBuildElement && $BuildInfoList[$ID].buyable}
<form class="build_form" action="game.php?page=buildings" method="post">
<input type="hidden" name="cmd" value="insert">
<input type="hidden" name="building" value="{$ID}">
{$LNG.tech.{$ID}} ({$LNG.bd_lvl} {$List.level}){if $List.destroy} {$LNG.bd_dismantle}{/if}
</form>
{else}{$LNG.tech.{$ID}} {$List.level} {if $List.destroy}{$LNG.bd_dismantle}{/if}{/if}
{if $List@first}
<div id="progressbar" data-time="{$List.resttime}">

</td>
<td>
<form action="game.php?page=buildings" method="post" class="build_form">
<input type="hidden" name="cmd" value="cancel">
<button class="button">{$LNG.bd_cancel}<br><div id="time" data-time="{$List.time}"><br></div></button>
</form>
{else}
</td>
<td>
<form action="game.php?page=buildings" method="post" class="build_form">
<input type="hidden" name="cmd" value="remove">
<input type="hidden" name="listid" value="{$List@iteration}">
<button class="button">{$LNG.bd_cancel}</button>
</form>
{/if}
</td>
</tr>
</table>
{/foreach}
</div>

	{foreach $BuildInfoList as $ID => $Element}

<div class="grid_8">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="titletech"><a href="#" onclick="return Dialog.info({$ID})">{$LNG.tech.{$ID}}</a><br>{if $Element.level > 0} ({$LNG.bd_lvl} {$Element.level}{if $Element.maxLevel != 255}/{$Element.maxLevel}{/if}){/if}</h2> 
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content padding" style="height:175px;">
		
						<img src="{$dpath}gebaeude/{$ID}.gif" alt="{$LNG.tech.{$ID}}" width="60" height="60"><br>
						<div class="desc"><a href="#" class="tip" title="<br><br>{$LNG.shortDescription.{$ID}}">(?)</a> {$LNG.shortDescription.{$ID}}</div><br>
						<div class="resscost">{foreach $Element.costRessources as $RessID => $RessAmount}
					{$LNG.tech.{$RessID}}: <b><span style="color:{if $Element.costOverflow[$RessID] == 0}green{else}red{/if}">{$RessAmount|number}</span></b>
					{/foreach}<br>
					{foreach $Element.costOverflow as $ResType => $ResCount}
					{$LNG.tech.{$ResType}}: <span style="font-weight:700">{$ResCount|number}</span> 
					{/foreach}<br>
					{$LNG.fgf_time}{$Element.elementTime|time}</div>
					
					<div class="build">
					{if $Element.maxLevel == $Element.levelToBuild}
						<a href="#" class="button "><span style="color:red">{$LNG.bd_maxlevel}</span></a>
					{elseif ($isBusy.research && ($ID == 6 || $ID == 31)) || ($isBusy.shipyard && ($ID == 15 || $ID == 21))}
						<a href="#" class="button "><span style="color:red">{$LNG.bd_working}</span></a>
					{else}
						{if $RoomIsOk}
							{if $CanBuildElement && $Element.buyable}
							<form action="game.php?page=buildings" method="post" class="build_form">
								<input type="hidden" name="cmd" value="insert">
								<input type="hidden" name="building" value="{$ID}">
								<button type="submit" class="button ">{if $Element.level == 0}{$LNG.bd_build}{else}{$LNG.bd_build_next_level}{$Element.levelToBuild + 1}{/if}</button>
							</form>
							{else}
							<a href="#" class="button "><span style="color:red">{if $Element.level == 0}{$LNG.bd_build}{else}{$LNG.bd_build_next_level}{$Element.levelToBuild + 1}{/if}</span></a>
							{/if}
							
						{else}
						<span style="color:red">{$LNG.bd_no_more_fields}</span>
						{/if}
					{/if}
					</div>

		
	 </div> 
	<!-- Box Content: End -->
	
</div>
{/foreach}

{/block}