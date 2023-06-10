function array2xml(array $array, ?SimpleXMLElement $xml = null): string
{
    if ($xml === null) {
        $xml = new SimpleXMLElement('<root/>');
    }

    foreach (array_reverse($array, true) as $key => $value) {
        if (is_array($value)) {
            array2xml($value, $xml->addChild($key));
        } else {
            $xml->addChild($key, $value);
        }
    }

    return $xml->asXML();
}
