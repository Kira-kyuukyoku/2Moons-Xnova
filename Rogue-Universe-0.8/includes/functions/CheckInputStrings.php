<?php

function CheckInputStrings ( $String ) {
	global $ListCensure;

	$ValidString = $String;
	for ($Mot = 0; $Mot < count($ListCensure); $Mot++) {
		$ValidString = eregi_replace( "$ListCensure[$Mot]", "*", $ValidString );
	}
	return ($ValidString);
}
?>