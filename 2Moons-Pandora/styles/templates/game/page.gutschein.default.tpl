{block name="title" prepend}Gutschein{/block}
{block name="content"}
<center>
<form action="" method="post">
<input type="hidden" name="opt_save" value="1">
<table width="70%" cellpadding="2" cellspacing="2">
<tr>
	<th colspan="1">{$mod_gutscheine_user_headline}</th>
	<th colspan="1" width="5%"><img src="./styles/resource/images/admin/i.gif" width="16" height="16" alt="" class="tooltip" data-tooltip-content="{$mod_gutscheine_info_user}"></th>
</tr><tr>
	<td>{$mod_gutscheine_user_key}
	<td><input name="gutscheine_key" type="text" maxlength="60"></td>
</tr><tr>
	<td colspan="2"><input value="{$mod_user_refund}" type="submit"></td>
</tr>
</table>
</form>
</center>
{/block}