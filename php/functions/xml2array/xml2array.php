<?php

function xml_to_array($xml, $main_heading = '') 
{ 
    $deXml     = simplexml_load_string($xml); 
    $deJson    = json_encode($deXml); 
    $xml_array = json_decode($deJson, true); 
    if ($xml_array === null && json_last_error() !== JSON_ERROR_NONE) {
        return 'JSON decoding error: ' . json_last_error_msg();
    }
    if (!empty($main_heading)) { 
        $returned = $xml_array[$main_heading]; 
        return $returned; 
    } else { 
        return $xml_array; 
    } 
} 

$xml = <<<XML
<root>
  <element1>Wert1</element1>
  <element2>Wert2</element2>
  <element3>Wert3</element3>
</root>
XML;

$array = xml_to_array($xml);
print_r($array);  // Ausgabe: Array ( [element1] => Wert1 [element2] => Wert2 [element3] => Wert3 )

$array = xml_to_array($xml, 'element1');
print_r($array);  // Ausgabe: Wert1
