<br><br>
<h2>{adm_bn_ttle}</h2>
<form action="banned.php" method="post">
<input type="hidden" name="mode" value="banit">
<table width="440">
<tr>
	<td class="c" colspan="2">{adm_bn_plto}</td>
</tr><tr>
	<th width="138">{adm_bn_name}</th>
	<th width="290"><input name="name" type="text" size="25" /></th>
</tr><tr>
	<th>{adm_bn_reas}</th>
	<th><input name="why" type="text" value="" size="25" maxlength="50"></th>
</tr><tr>
	<td class="c" colspan="2">{adm_bn_time}</td>
</tr><tr>
	<th>{adm_bn_days}</th>
	<th><input name="days" type="text" value="0" size="5" /></th>
</tr><tr>
	<th>{adm_bn_hour}</th>
	<th><input name="hour" type="text" value="0" size="5" /></th>
</tr><tr>
	<th>{adm_bn_mins}</th>
	<th><input name="mins" type="text" value="0" size="5" /></th>
</tr><tr>
	<th>{adm_bn_secs}</th>
	<th><input name="secs" type="text" value="0" size="5" /></th>
</tr><tr>
  <th colspan="2"><label>
    <input name="urlaubs_modus" type="checkbox" id="urlaubs_modus" value="on" />
    Urlaubs Modus</label></th>
</tr><tr>
	<th colspan="2"><input type="submit" value="{adm_bn_bnbt}" /></th>
</tr>
</table>
</form>