{block name="title" prepend}{$LNG.lm_alliance}{/block}
{block name="content"}
<div class="grid_24">
<form action="game.php?page=alliance&amp;mode=admin&amp;action=transfer" method="post">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon users">{$LNG.lm_alliance}</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table>
			<tbody>
				<tr class="gradeA">
		<td>{$LNG.al_transfer_to}:</td>
		<td>{html_options name=newleader options=$transferUserList}</td>
		<td><input type="submit" value="{$LNG.al_transfer_submit}"></td>
				</tr>

			</tbody>
		</table>
		<!-- Plain Table: End -->
</form>
	</div>
	<!-- Box Content: End -->
	
</div>

{/block}