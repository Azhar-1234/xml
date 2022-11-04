<?php
    $xml=<<<XML
        <info xmlns:student="http://w3.com/student" xmlns:fruits="http://w3.com/fruits">
            <student:table>
                <student:name>Azhar Uddin</student:name>
                <student:age>99</student:age>
                <student:address>janina thikana</student:address>
            </student:table>
            <fruits:table>
                <fruits:name>mango</fruits:name>
                <fruits:size>99</fruits:size>
                <fruits:weight>22</fruits:weight>
            </fruits:table>
        </info>
    XML;

    $sxe=new SimpleXMLElement($xml);
    $namespace = $sxe->getDocNamespaces(TRUE);
    echo "<pre>";
        print_r($namespace);
    echo "</pre>";

