<?php

namespace ericsson\test;
use ericsson\dbmodel as dbmodel;

class NumberLookup
{
    public function __construct()
    {
    }

    public function parseMsisdn($msisdn)
    {
        require_once('DbModel.php');

        $db     = new dbmodel\DbModel();
        $result = $db->parseMsisdn($msisdn);

        return $result;
    }
}
