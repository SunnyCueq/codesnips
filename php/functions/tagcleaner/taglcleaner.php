<?php

function clean_input($text) 
{ 
    $text = strip_tags($text); // Entfernt HTML-Tags
    $text = stripslashes($text); // Entfernt Slash-Zeichen
    $text = html_entity_decode($text, ENT_QUOTES, 'UTF-8'); // Wandelt HTML-Entities in ihre entsprechenden Zeichen um
    $text = trim($text); // Entfernt überflüssige Leerzeichen
    return $text; 
}

$text = '   <p>Hello, "World"!</p>   ';

$clean_text = clean_input($text);
echo "Bereinigter Text: " . $clean_text;
