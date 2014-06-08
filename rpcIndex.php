<?php

    function msisdnLookup($method, $params) {

        $msisdn = $params[0]["msisdn"];
        $result = "";

        require_once("NumberLookup.php");

        $lookup = new ericsson\test\NumberLookup();

        if ($msisdn) {
            $info   = $lookup->parseMsisdn($msisdn);
            $result = $info[0]["operator_name"] . ", " . $info[0]["country_dial_code"] . ", " .
                      substr($msisdn, strlen($info[0]["country_dial_code"])) . ", " . $info[0]["country_code"];
        }

        return $result;
    }

    $server = xmlrpc_server_create();

    xmlrpc_server_register_method($server, 'msisdnLookup', 'msisdnLookup');

    $request  = file_get_contents('php://input');
    $response = xmlrpc_server_call_method($server, $request, null);

    header('Content-Type: text/xml');

    echo $response;
