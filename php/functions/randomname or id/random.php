<?php

function randomName($length, $letters_only = false)
{
    $str = '';

    if (!$letters_only) {
        $randomBytes = random_bytes($length);
        $str = bin2hex($randomBytes);
        return substr($str, 0, $length);
    }

    for ($i = 0; $i < $length; $i++) {
        $asciiCode = mt_rand(97, 122); // ASCII-Code für Buchstaben a-z
        $str .= chr($asciiCode);
    }

    return $str;
}

$length = 10;
$lettersOnly = false;

$randomName = randomName($length, $lettersOnly);

echo "Zufälliger Name: " . $randomName;
