<?php

function un_htmlspecialchars($text) {
    return html_entity_decode($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

$text = '&lt;p&gt;Hello, World!&lt;/p&gt;';

$decoded_text = un_htmlspecialchars($text);
echo "Decodierter Text: " . $decoded_text;
