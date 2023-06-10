function nfo_stripper($text)
{
    // NFO Zeichen entfernen
    $text = preg_replace_callback('/[^a-zA-Z0-9öäüÖÄÜß\\-_?!&[\\]().,;:+=#*~@\\/\\\\\'"><\\s]/u', function($match) {
        return '';
    }, $text);

    // <br>,<br />, <br > Am Anfang und Ende entfernen
    $text = preg_replace('/^\s*(?:<br\s*\/?>\s*)*/i', '', $text);
    $text = preg_replace('/\s*(?:<br\s*\/?>\s*)*$/i', '', $text);

    // Leerzeichenanpassung
    $text = preg_replace('/\s{2,}/', ' ', $text);
    $text = preg_replace("/([\\t ]+)(\\s$)/m", "\r2", $text);
    $text = preg_replace("/\\r1{2,}/", "", $text);
    $text = preg_replace('#(?<!\r\n)\r\n(?!\r\n)#', ' ', $text);

    $text = preg_replace('/(\<br \/\>){3,}/', '<br /><br />', $text);

    $text = trim($text);
    return $text;
}
