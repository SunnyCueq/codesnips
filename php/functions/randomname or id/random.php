<?php
declare(strict_types=1);

/**
 * Generate a random string.
 *
 * Deutsch: Erzeugt einen zufälligen String. Standard: hex-String aus kryptografisch sicheren Bytes;
 * bei lettersOnly=true werden Buchstaben (a-z oder A-Z) verwendet.
 *
 * @param int $length Länge (> 0)
 * @param bool $lettersOnly nur Buchstaben verwenden
 * @param bool $uppercase Großbuchstaben verwenden (nur bei lettersOnly=true)
 * @return string Zufallsstring
 */
function randomName(int $length, bool $lettersOnly = false, bool $uppercase = false): string
{
    if ($length <= 0) {
        throw new InvalidArgumentException('length must be positive');
    }

    if (!$lettersOnly) {
        // Hex-String aus kryptografisch sicheren Bytes
        return substr(bin2hex(random_bytes((int) ceil($length / 2))), 0, $length);
    }

    $alphabet = $uppercase ? 'ABCDEFGHIJKLMNOPQRSTUVWXYZ' : 'abcdefghijklmnopqrstuvwxyz';
    $alphabetLen = strlen($alphabet);
    $out = '';
    for ($i = 0; $i < $length; $i++) {
        $idx = random_int(0, $alphabetLen - 1);
        $out .= $alphabet[$idx];
    }
    return $out;
}

// Example
$length = 10;
$lettersOnly = false;
$uppercase = false;
echo 'Zufälliger Name: ' . randomName($length, $lettersOnly, $uppercase);
