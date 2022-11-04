<?php
    $sxe=simplexml_load_file('test.xml');
    $address = $sxe->xpath("student/address/presentAddress");

    foreach($address as $addr)
    {
        foreach($addr as $key=>$val)
        {
            echo $key."=".$val,"<br>";
        }
    }
    