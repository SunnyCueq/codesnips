<?php

function array2xml(array $array): string
{
    $xml = new SimpleXMLElement('<root/>');

    $array = array_reverse($array, true);
    
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            array2xmlRecursive($value, $xml->addChild($key));
        } else {
            $xml->addChild($key, $value);
        }
    }

    return $xml->asXML();
}

function array2xmlRecursive(array $array, SimpleXMLElement $parent): void
{
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            array2xmlRecursive($value, $parent->addChild($key));
        } else {
            $parent->addChild($key, $value);
        }
    }
}

$array = [
    'person' => [
        'name' => 'John Doe',
        'age' => 30,
        'address' => [
            'street' => '123 Main St',
            'city' => 'New York',
            'country' => 'USA'
        ]
    ]
];

$xml = array2xml($array);

echo $xml;
