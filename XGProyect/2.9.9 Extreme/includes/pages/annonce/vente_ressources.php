<?php
/*
vente_ressources.php

 version 2.0
 modificado por bonyy

 @copyright 2009 by Nain Pitoyable pour AideXnova
*/
//mise en page

$page .='<HTML><div id="content">
<table width="600">
<td class="c">Men� Comercial</td></table>
<br>
'.$pageHeader.'
<br><br><br>
<table width="600">
<td class="c" colspan="10" align="center"><b><font color="white">A�adir un anuncio</font></b></td></tr>
<form action="game.php?page=annonce&action=13" method="post">
<td class="c" colspan="10" align="center"><b>Recursos a vender</font></b></td>
<tr><th colspan="5">Metal</th><th colspan="5"><input type="texte" value="0" name="metalvendre" /></th></tr>
<tr><th colspan="5">Cristal</th><th colspan="5"><input type="texte" value="0" name="cristalvendre" /></th></tr>
<tr><th colspan="5">Deuterio</th><th colspan="5"><input type="texte" value="0" name="deutvendre" /></th></tr>

<td class="c" colspan="10" align="center"><b>Recursos deseados</font></b></td></tr>
<tr><th colspan="5">Metal</th><th colspan="5"><input type="texte" value="0" name="metalsouhait" /></th></tr>
<tr><th colspan="5">Cristal</th><th colspan="5"><input type="texte" value="0" name="cristalsouhait" /></th></tr>
<tr><th colspan="5">Deuterio</th><th colspan="5"><input type="texte" value="0" name="deutsouhait" /></th></tr>
<tr><th colspan="10"><input type="submit" value="Enviar" /></th></tr>

<form>
</table></div>
</HTML>';

display($page);

break;

 ?>