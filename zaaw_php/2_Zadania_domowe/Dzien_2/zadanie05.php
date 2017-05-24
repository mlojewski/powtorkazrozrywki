<?php

function showProduct($attribute, $path){
    
    $readContent = file_get_contents($path);
    $oXMLRead = new XMLReader();
    $oXMLRead->XML($readContent);

    while($oXMLRead->read()){

    }
    
}

