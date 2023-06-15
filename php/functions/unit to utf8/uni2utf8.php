<?php

function uni_to_utf8($char) 
{ 
    $char = intval($char);
    $utf8_char = '&#' . $char . ';';
    return mb_convert_encoding($utf8_char, 'UTF-8', 'HTML-ENTITIES');
}

$unicode_char = '8364';  // Das ist das Unicode für das Euro-Symbol

$utf8_char = uni_to_utf8($unicode_char);
echo "UTF-8 Zeichen: " . $utf8_char;
