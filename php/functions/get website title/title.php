<?php

function getPageTitle($sURL)
{
    $context = stream_context_create([
        'http' => [
            'method' => 'GET',
            'header' => 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36',
        ],
    ]);

    if (($sHTML = file_get_contents($sURL, false, $context)) &&
        preg_match("/<title>(.+)<\/title>/si", $sHTML, $aTitle))
    {
        return trim($aTitle[1]);
    }

    return false;
}


$url = 'https://www.example.com';

$result = getPageTitle($url);

if ($result !== false) {
    echo "Seitentitel: " . $result;
} else {
    echo "Fehler beim Abrufen des Seitentitels.";
}
