<?php

namespace ericsson\dbmodel;

class DbModel
{
    public function __construct()
    {
    }

    public function connectToDb()
    {
        $server   = 'localhost';
        $user     = 'root';
        $pass     = 'root';
        $database = 'ericsson_test';

        $conn = new \mysqli($server, $user, $pass, $database);

        return $conn;
    }

    public function parseMsisdn($msisdn)
    {
        $db = $this->connectToDb();

        $query = "select * from ericsson_mobile_operators where first_digits = SUBSTRING('" . $msisdn . "', 1, CHAR_LENGTH(`first_digits`)) AND country_dial_code != ''";
        $result = $db->query($query);

        $mobileInfo = Array();
		if ($db->affected_rows > 0) {
			while ($info = $result->fetch_array(MYSQLI_ASSOC)) {
                $mobileInfo[] = $info;
            }
        }

        return $mobileInfo;
    }
}
