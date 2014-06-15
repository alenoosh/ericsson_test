<?php

class callRpcTest extends PHPUnit_Framework_TestCase
{
    public function setUp() { }

    public function tearDown() { }

    /**
     * @dataProvider msisdnProvider
     */
    public function testMsisdnLookup($msisdn, $expected)
    {
        $requestArr = array('msisdn' => $msisdn);
        $request    = xmlrpc_encode_request('msisdnLookup', array($requestArr), array('encoding' => 'UTF-8'));

        $context = stream_context_create(
            array(
                'http' => array(
                    'method' => "POST",
                    'header' => "Content-Type: text/xml",
                    'content' => $request
                    )
                 )
        );

        $file = file_get_contents('http://localhost/ericsson/www/public/ericsson/rpcIndex.php', false, $context);

        if (!$file) {
            throw new Exception('Unable to get response from web service');
        }

        $response = xmlrpc_decode($file);

        $this->assertRegExp("/^\A(\S|\s)+,\s(\d){1,4},\s\d+,\s(\S|\s)+/", $response);
    }

    public function msisdnProvider()
    {
        return array(
                        array('38640123456', 'SI.Mobil, 386, 40123456, si'),
                        array('37410560494', 'ArmenTel/Beeline, 374, 10560494, am'),
                        array('61292883000', 'Singtel Optus, 61, 292883000, au'),
                        array('1800943002',  'Bluegrass Wireless LLC, 1, 800943002, us')
                    );
    }
}
