<?php

$oXML = new XMLReader();
$stringXML = file_get_contents('xml.xml');
$oXML->xml($stringXML);

while($oXML->read()){
    var_dump($oXML->name);
}

