<?php
// Funktion zur Umwandlung von UTF-8 Zeichen in HTML Entitäten
// Function to convert UTF-8 characters to HTML entities
function utf8_to_htmlentities($source)
{
    // Initialisieren einer leeren Zeichenkette, die das Ergebnis enthalten wird
    // Initializing an empty string that will hold the result
    $str = '';

    // Erfassen der Länge der Eingabe-Zeichenkette in UTF-8 Kodierung
    // Getting the length of the input string in UTF-8 encoding
    $len = mb_strlen($source, 'UTF-8');

    // Durchlaufen der gesamten Eingabe-Zeichenkette Zeichen für Zeichen
    // Going through the entire input string character by character
    for ($pos = 0; $pos < $len; $pos++) {
        // Erfassen des aktuellen Zeichens in der Zeichenkette
        // Getting the current character in the string
        $char = mb_substr($source, $pos, 1, 'UTF-8');
        
        // Umwandeln des Zeichens in seinen dezimalen Unicode-Wert
        // Converting the character into its decimal unicode value
        $decimalCode = mb_ord($char, 'UTF-8');

        // Überprüfen, ob der dezimale Unicode-Wert kleiner oder gleich 128 ist
        // Checking if the decimal unicode value is less than or equal to 128
        if ($decimalCode <= 128) {
            // Wenn ja, wird das Zeichen unverändert beibehalten
            // If yes, the character is kept as is
            $encodedLetter = $char;
        } else {
            // Wenn nein, wird das Zeichen in eine HTML Entität umgewandelt
            // If not, the character is converted into an HTML entity
            $encodedLetter = '&#' . $decimalCode . ';';
        }

        // Hinzufügen des kodierten Zeichens zur Ergebnis-Zeichenkette
        // Adding the encoded character to the result string
        $str .= $encodedLetter;
    }

    // Zurückgeben der transformierten Zeichenkette
    // Returning the transformed string
    return $str;
}
