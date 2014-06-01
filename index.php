<?php

	require_once("NumberLookup.php");

	$pp = new ericsson\test\NumberLookup();

	$info = $pp->getCountryInformation();

	echo "<pre>"; print_r($info); echo "</pre>";

?>
