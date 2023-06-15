function utf8_to_htmlentities($source)
{
    $str = '';
    $len = mb_strlen($source, 'UTF-8');
    
    for ($pos = 0; $pos < $len; $pos++) {
        $char = mb_substr($source, $pos, 1, 'UTF-8');
        $decimalCode = mb_ord($char, 'UTF-8');
        
        if ($decimalCode <= 128) {
            $encodedLetter = $char;
        } else {
            $encodedLetter = '&#' . $decimalCode . ';';
        }
        
        $str .= $encodedLetter;
    }
    
    return $str;
}
