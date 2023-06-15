<?php

function randomName($length, $letters_only = false)
{
    $str = '';

    if (!$letters_only) {
        $bytes = random_bytes($length);
        $str = bin2hex($bytes);
        return substr($str, 0, $length);
    }

    for ($i = 0; $i < $length; $i++) {
        $randomInt = random_int(97, 122); // Zufällige Ganzzahl im Bereich 97-122 (ASCII-Werte für Buchstaben a-z)
        $str .= chr($randomInt);
    }

    return $str;
}

$length = 10;
$lettersOnly = false;

$randomName = randomName($length, $lettersOnly);

echo "Zufälliger Name: " . $randomName;
