<?php

function nfo_stripper($text)
{
    // NFO Zeichen entfernen
    $text = preg_replace('/[^a-zA-Z0-9öäüÖÄÜß\\-_?!&[\\]().,;:+=#*~@\\/\\\\\'"><\\s]/u', '', $text);

    // Leerzeichenanpassung
    $text = preg_replace('/\s+/', ' ', $text);
    $text = preg_replace('/([\\t ]+)(\\s$)/m', "\r2", $text);
    $text = preg_replace('/\\r1{2,}/', '', $text);
    $text = preg_replace('/(?<!\r\n)\r\n(?!\r\n)/', ' ', $text);

    $text = preg_replace('/(\<br \/\>){3,}/', '<br /><br />', $text);

    $text = trim($text);
    return $text;
}

$text = "Dies ist\n\nein NFO-Text!\r\n\nMit Sonderzeichen: *&%$#\n\nUnd Leerzeichen    am Anfang und Ende.   ";

$result = nfo_stripper($text);

echo $result;
