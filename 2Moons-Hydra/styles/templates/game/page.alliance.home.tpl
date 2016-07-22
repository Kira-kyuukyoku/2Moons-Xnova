{block name="title" prepend}{$LNG.lm_alliance}{/block}
{block name="content"}

<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon users">{$LNG.al_your_ally}</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table>
			{if $ally_image}
	<tr>
		<td colspan="2"><center><img src="{$ally_image}"></center></td>
	</tr>
	{/if}

			<tbody>
	<tr>
		<td style="width:50%">{$LNG.al_ally_info_tag}</td>
		<td style="width:50%">{$ally_tag}</td>
	</tr>
		<tr>
		<td style="width:50%">{$LNG.al_ally_info_tag}</td>
		<td style="width:50%">{$ally_tag}</td>
	</tr>
	<tr>
		<td>{$LNG.al_ally_info_name}</td>
		<td>{$ally_name}</td>
	</tr>
	<tr>
		<td>{$LNG.al_ally_info_members}</td>
		<td>{$ally_max_members} / {$ally_members}{if $rights.MEMBERLIST} (<a href="?page=alliance&amp;mode=memberList">{$LNG.al_user_list}</a>){/if}</td>
	</tr>
	<tr>
		<td>{$LNG.al_rank}</td>
		<td>{$rankName}{if $rights.ADMIN} (<a href="?page=alliance&amp;mode=admin">{$LNG.al_manage_alliance}</a>){/if}</td>
	</tr>
	{if $rights.SEEAPPLY && $applyCount > 0}		
	<tr>
		<td>{$LNG.al_requests}</td><td><a href="?page=alliance&amp;mode=admin&amp;action=mangeApply">{$requests}</a></td>
	</tr>
	{/if}
	{if $rights.ROUNDMAIL}
	<tr>
		<td>{$LNG.al_circular_message}</td><td><a href="game.php?page=alliance&mode=circular" onclick="return Dialog.open(this.href, 650, 300);">{$LNG.al_send_circular_message}</a></td>
	</tr>
	{/if}
	{if $rights.EVENTS}
	<tr>
			<th colspan="2">{$LNG.al_events}</th>
		</tr>
		{if $ally_events}
			{foreach $ally_events as $member => $events}
				<tr>
					<td colspan="2">{$member}</td>
				</tr>
				{foreach $events as $index => $fleet}
				<tr>
					<td id="fleettime_{$index}" class="fleets" data-fleet-end-time="{$fleet.returntime}" data-fleet-time="{$fleet.resttime}">-</td>
					<td colspan="2">{$fleet.text}</td>
				</tr>
				{/foreach}
			{/foreach}
		{else}
			<tr>
				<td colspan="2">{$LNG.al_no_events}</td>
			</tr>
		{/if}
	{/if}
	<tr>
		<td colspan="2" style="height:100px" class="bbcode">{if $ally_description}{$ally_description}{else}{$LNG.al_description_message}{/if}</td>
	</tr>
	{if $ally_web}
	<tr>
		<td>{$LNG.al_web_text}</td>
		<td><a href="{$ally_web}">{$ally_web}</a></td>
	</tr>
	{/if}
			</tbody>
		</table>
		<!-- Plain Table: End -->

	</div>
	<!-- Box Content: End -->
	
	
	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon users">{$LNG.al_inside_section}</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table>
			<tbody>
	<tr>
		<td colspan="2" height="100" class="bbcode">{$ally_text}</td>
	</tr>
			</tbody>
		</table>
		<!-- Plain Table: End -->

	</div>
	<!-- Box Content: End -->

	
	
	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon users">{$LNG.al_diplo}</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table>
			<tbody>
	<tr>
		<td colspan="2">
		{if $DiploInfo}
			{if !empty($DiploInfo.0)}<b><u>{$LNG.al_diplo_level.0}</u></b><br><br>{foreach item=PaktInfo from=$DiploInfo.0}<a href="?page=alliance&mode=info&amp;id={$PaktInfo.1}">{$PaktInfo.0}</a><br>{/foreach}<br>{/if}
		{if !empty($DiploInfo.1)}<b><u>{$LNG.al_diplo_level.1}</u></b><br><br>{foreach item=PaktInfo from=$DiploInfo.1}<a href="?page=alliance&mode=info&amp;id={$PaktInfo.1}">{$PaktInfo.0}</a><br>{/foreach}<br>{/if}
		{if !empty($DiploInfo.2)}<b><u>{$LNG.al_diplo_level.2}</u></b><br><br>{foreach item=PaktInfo from=$DiploInfo.2}<a href="?page=alliance&mode=info&amp;id={$PaktInfo.1}">{$PaktInfo.0}</a><br>{/foreach}<br>{/if}
		{if !empty($DiploInfo.3)}<b><u>{$LNG.al_diplo_level.3}</u></b><br><br>{foreach item=PaktInfo from=$DiploInfo.3}<a href="?page=alliance&mode=info&amp;id={$PaktInfo.1}">{$PaktInfo.0}</a><br>{/foreach}<br>{/if}
			{if !empty($DiploInfo.4)}<b><u>{$LNG.al_diplo_level.4}</u></b><br><br>{foreach item=PaktInfo from=$DiploInfo.4}<a href="?page=alliance&mode=info&amp;id={$PaktInfo.1}">{$PaktInfo.0}</a><br>{/foreach}<br>{/if}
		{else}
			{$LNG.al_no_diplo}
		{/if}
		</td>
	</tr>
			</tbody>
		</table>
		<!-- Plain Table: End -->

	</div>
	<!-- Box Content: End -->

	
	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon users">{$LNG.pl_fightstats}</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table>
			<tbody>
	<tr>
		<td>{$LNG.pl_totalfight}</td><td>{$totalfight|number}</td>
	</tr>
	<tr>
		<td>{$LNG.pl_fightwon}</td><td>{$fightwon|number} {if $totalfight}({round($fightwon / $totalfight * 100, 2)}%){/if}</td>
	</tr>
	<tr>	
		<td>{$LNG.pl_fightlose}</td><td>{$fightlose|number} {if $totalfight}({round($fightlose / $totalfight * 100, 2)}%){/if}</td>
	</tr>
	<tr>	
		<td>{$LNG.pl_fightdraw}</td><td>{$fightdraw|number} {if $totalfight}({round($fightdraw / $totalfight * 100, 2)}%){/if}</td>
	</tr>
	<tr>
		<td>{$LNG.pl_unitsshot}</td><td>{$unitsshot}</td>
	</tr>
	<tr>
		<td>{$LNG.pl_unitslose}</td><td>{$unitslose}</td>
	</tr>
	<tr>
		<td>{$LNG.pl_dermetal}</td><td>{$dermetal}</td>
	</tr>
	<tr>
		<td>{$LNG.pl_dercrystal}</td><td>{$dercrystal}</td>
	</tr>
				</tr>
			</tbody>
		</table>
		<!-- Plain Table: End -->

	</div>
	<!-- Box Content: End -->
	
</div>

{/block}