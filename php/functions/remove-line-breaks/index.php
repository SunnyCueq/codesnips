<?php
declare(strict_types=1);

    /**
     * Normalize line breaks to \n and trim surrounding whitespace.
     *
     * Deutsch: Normalisiert Zeilenumbrüche auf "\n" und trimmt führende/trailende Leerzeichen.
     *
     * @param string $text Eingabetext
     * @return string Normalisierter Text
     */
    function removeLineBreak(string $text): string
    {
        $string = preg_replace('/\R+/', "\n", $text);
        $string = trim($string);
        return $string;
    }

$text = "Hallo,\r\n\r\nWie geht's?\n\nGruß";
$bereinigterText = removeLineBreak($text);
echo $bereinigterText;
