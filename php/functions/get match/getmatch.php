<?php

function get_match($regex, $content, $pos = 1)
{
    if (preg_match($regex, $content, $matches)) {
        return $matches[intval($pos)] ?? null;
    }

    return null;
}

$text = 'Hallo Welt, wie geht es dir?';
$regex = '/Welt/';

echo get_match($regex, $text);
