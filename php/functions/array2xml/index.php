<?php

// Funktion zur Umwandlung eines Arrays in eine XML-Struktur
// Function to convert an array to an XML structure
function array2xml(array $array): string
{
    // Erstellen eines neuen XML-Elements mit der Wurzel "root"
    // Creating a new XML element with the root "root"
    $xml = new SimpleXMLElement('<root/>');

    // Umkehrung der Reihenfolge der Elemente im Array, um die Ausgabe der XML-Struktur zu kontrollieren
    // Reversing the order of the elements in the array to control the output of the XML structure
    $array = array_reverse($array, true);
    
    // Iteration über jedes Element im Array
    // Iterating over each element in the array
    foreach ($array as $key => $value) {
        // Überprüfen, ob das Element ein Array ist
        // Checking if the element is an array
        if (is_array($value)) {
            // Wenn ja, rufen Sie die rekursive Funktion auf, um die Verschachtelung zu behandeln
            // If yes, call the recursive function to handle nesting
            array2xmlRecursive($value, $xml->addChild($key));
        } else {
            // Wenn nein, fügen Sie das Element als Kind zum XML hinzu
            // If no, add the element as a child to the XML
            $xml->addChild($key, $value);
        }
    }

    // Rückgabe der XML-Struktur als String
    // Returning the XML structure as a string
    return $xml->asXML();
}

// Rekursive Funktion zur Behandlung von verschachtelten Arrays
// Recursive function to handle nested arrays
function array2xmlRecursive(array $array, SimpleXMLElement $parent): void
{
    // Iteration über jedes Element im Array
    // Iterating over each element in the array
    foreach ($array as $key => $value) {
        // Überprüfen, ob das Element ein Array ist
        // Checking if the element is an array
        if (is_array($value)) {
            // Wenn ja, rufen Sie die Funktion rekursiv auf
            // If yes, call the function recursively
            array2xmlRecursive($value, $parent->addChild($key));
        } else {
            // Wenn nein, fügen Sie das Element als Kind zum Elternelement hinzu
            // If no, add the element as a child to the parent
            $parent->addChild($key, $value);
        }
    }
}

// Initialisierung des Array mit den Daten
// Initializing the array with the data
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

// Umwandlung des Arrays in eine XML-Struktur und Speicherung in einer Variable
// Converting the array to an XML structure and storing in a variable
$xml = array2xml($array);

// Ausgabe der XML-Struktur
// Printing the XML structure
echo $xml;
