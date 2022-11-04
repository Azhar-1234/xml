<?php
    $sxe = simplexml_load_file('test.xml');
    foreach($sxe->student->address->presentAddress->attributes() as $key=>$val)
    {
        echo $key.'='.$val.'<br>';
    }
    print_r($sxe->student->address->presentAddress[0]['type']);
?>