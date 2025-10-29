<?php
declare(strict_types=1);

// Funktion zur Erstellung eines Verzeichnisses mit bestimmten Berechtigungen
// Function to create a directory with specific permissions
/**
 * Create a directory recursively with permissions.
 *
 * Deutsch: Erstellt ein Verzeichnis rekursiv mit Berechtigungen.
 *
 * @param string $dir Zielpfad
 * @param int $chmod Modus (Standard: CHMOD_DIRS oder 0775)
 * @return bool true bei Erfolg, sonst false
 */
function _mkdir(string $dir, int $chmod = 0775): bool
{
    // Überprüfen, ob das Verzeichnis bereits existiert
    // Check if the directory already exists
    if (is_dir($dir)) {
        return true;
    }

    // Versuchen, das Verzeichnis mit den angegebenen Berechtigungen zu erstellen und prüfen, ob es erfolgreich war
    // Attempt to create the directory with the specified permissions and check if it was successful
    if (@mkdir($dir, $chmod, true)) {
        return true;
    }

    // Wenn das obige fehlschlägt, überprüfen, ob das übergeordnete Verzeichnis beschreibbar ist und erneut versuchen, das Verzeichnis zu erstellen
    // If the above fails, check if the parent directory is writable and try again to create the directory
    if (is_writable(dirname($dir)) && @mkdir($dir, $chmod)) {
        return true;
    }

    // Wenn alle Versuche fehlschlagen, gib false zurück
    // If all attempts fail, return false
    return false;
}

$directory = 'path/to/directory';

// Verwenden der Funktion _mkdir zum Erstellen des Verzeichnisses und Ausgabe einer Erfolgs- oder Fehlermeldung
// Use the _mkdir function to create the directory and output a success or error message
if (_mkdir($directory)) {
    echo "Verzeichnis erfolgreich erstellt."; // Directory successfully created
} else {
    echo "Fehler beim Erstellen des Verzeichnisses."; // Error creating directory
}
