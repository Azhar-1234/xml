<?php
    $sxe=simplexml_load_file('test.xml');
    print_r($sxe);


    $xml= <<<"xml"
    <college>
        <student>
            <firstName>Azhar Uddin</firstName>
            <lastName>Raihan</lastName>
            <mobile>018*********</mobile>
            <address>
                <presentAddress>
                    <zila>Feni</zila>
                    <upzila>chhagalniya</upzila>
                    <post>3912</post>
                </presentAddress>
                <permanentAddress>
                    <zila>comilla</zila>
                    <upzila>sadar</upzila>
                </permanentAddress>
            </address>
        </student>    
    </college>
    xml;
    $xmlObj = simplexml_load_string($xml);
    $jsonStr = json_encode($xmlObj);
    print_r(json_decode($jsonStr,true));
    // echo $xmlObj->student->address->asXML("address.xml");
    // $xmlObj = new SimpleXMLElement($xml);
    // echo "Name: ".$xmlObj->student->firstName;