<?php
declare(strict_types=1);

/**
 * Generate a unique filename in a directory by appending an incrementing suffix.
 *
 * Deutsch: Erzeugt einen eindeutigen Dateinamen in einem Verzeichnis, indem ein Zähler-Suffix
 * ("_2", "_3", ...) angehängt wird, wenn der Zielname bereits existiert.
 *
 * @param string $baseDir Basisverzeichnis
 * @param string $fileName gewünschter Dateiname (mit/ohne Erweiterung)
 * @return string verfügbarer (neuer) Dateiname
 */
function create_unique_filename(string $baseDir, string $fileName): string
{
    $parts = pathinfo($fileName);
    $ext = $parts['extension'] ?? '';
    $name = $parts['filename'] ?? '';

    $baseDir = rtrim($baseDir, DIRECTORY_SEPARATOR);
    $candidate = $fileName;
    if (!file_exists($baseDir . DIRECTORY_SEPARATOR . $candidate)) {
        return $candidate;
    }

    $counter = 2;
    do {
        $candidate = $name . '_' . $counter . ($ext !== '' ? '.' . $ext : '');
        $counter++;
    } while (file_exists($os = $baseDir . DIRECTORY_SEPARATOR . $candidate));

    return $candidate;
}

// Example
$base = '/pfad/zum/verzeichnis';
$file = 'test.txt';
echo 'Eindeutiger Dateiname: ' . create_unique_filename($base, $file);
