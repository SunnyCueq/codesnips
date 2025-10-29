<?php
declare(strict_types=1);

/**
 * Convert an XML string to an associative array (via SimpleXML -> JSON).
 *
 * Deutsch: Wandelt einen XML-String in ein assoziatives Array um (SimpleXML -> JSON).
 *
 * @param string $xml XML-Eingabe (UTF-8)
 * @param string $main_heading Optionaler Schlüssel, um einen Teilbaum zu extrahieren
 * @return array Ergebnis-Array
 * @throws RuntimeException bei ungültigem XML oder JSON-Fehlern
 */
function xml_to_array(string $xml, string $main_heading = ''): array 
{ 
    libxml_use_internal_errors(true);
    $deXml = simplexml_load_string($xml);
    if ($deXml === false) {
        $err = libxml_get_errors();
        libxml_clear_errors();
        throw new RuntimeException('Invalid XML');
    }
    $deJson    = json_encode($deXml, JSON_THROW_ON_ERROR); 
    $xml_array = json_decode($deJson, true, 512, JSON_THROW_ON_ERROR); 
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

try {
    $array = xml_to_array($xml);
    print_r($array);  // Ausgabe: Array ( [element1] => Wert1 [element2] => Wert2 [element3] => Wert3 )

    $array = xml_to_array($xml, 'element1');
    print_r($array);  // Ausgabe: Wert1
} catch (Throwable $e) {
    echo 'XML Fehler: ' . $e->getMessage();
}
