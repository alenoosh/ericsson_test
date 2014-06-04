<?php

    require_once("NumberLookup.php");

    $lookup = new ericsson\test\NumberLookup();

    $msisdn = isset($_POST["msisdn"]) ? $_POST["msisdn"] : null;
    if ($msisdn) {

        $info = $lookup->parseMsisdn($msisdn);

        echo "INPUT : " . $msisdn . "<br /><br />";
        echo "OUTPUT : " . $info[0]["operator_name"] . ", " . $info[0]["country_dial_code"] . ", " .
             substr($msisdn, strlen($info[0]["country_dial_code"])) . ", " . $info[0]["country_code"];
    }
