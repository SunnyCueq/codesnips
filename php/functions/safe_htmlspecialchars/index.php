<?php
declare(strict_types=1);

/**
 * Encodes only free ampersands first and then applies htmlspecialchars for safe HTML output.
 *
 * Deutsch: Kodiert zunächst nur freie "&" (keine Entitäten) und nutzt danach
 * htmlspecialchars mit ENT_QUOTES|ENT_HTML5|ENT_SUBSTITUTE (UTF-8) für sicheren HTML-Output.
 *
 * @param string $chars Eingabetext (UTF-8 erwartet)
 * @return string Gesicherter HTML-String
 */
function safe_htmlspecialchars(string $chars): string
{
    // Translate all non-unicode entities
    $chars = preg_replace_callback(
        '/&(?!([#][0-9]+|[a-z]+);)/si',
        function ($match) {
            return '&amp;';
        },
        $chars
    );

    $chars = htmlspecialchars($chars, ENT_QUOTES | ENT_HTML5 | ENT_SUBSTITUTE, 'UTF-8');
    return $chars;
}

$chars = '<script>alert("XSS attack");</script>';

$safeChars = safe_htmlspecialchars($chars);

echo "Sicherer String: " . $safeChars;
