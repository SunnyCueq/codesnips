<?php

    function removeLineBreak($text)
    {
        $string = preg_replace('/\R+/', "\n", $text);
        $string = trim($string);
        return $string;
    }

$text = "Hallo,\r\n\r\nWie geht's?\n\nGruß";
$bereinigterText = removeLineBreak($text);
echo $bereinigterText;
