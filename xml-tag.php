<?php 
    $sxe=simplexml_load_file('test.xml');
    // $sxe->student->addChild('fatherName','alam uddin');
    $sxe->student->address->presentAddress->addAttribute('type','multiple');
    echo $sxe->asXML('test.xml');    








?>