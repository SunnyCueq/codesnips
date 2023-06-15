function safe_htmlspecialchars($chars)
{
    // Translate all non-unicode entities
    $chars = preg_replace_callback(
        '/&(?!(#[0-9]+|[a-z]+);)/si',
        function ($match) {
            return '&amp;';
        },
        $chars
    );

    $chars = htmlspecialchars($chars, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    return $chars;
}

$chars = '<script>alert("XSS attack");</script>';

$safeChars = safe_htmlspecialchars($chars);

echo "Sicherer String: " . $safeChars;
