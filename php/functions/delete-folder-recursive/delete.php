<?php
declare(strict_types=1);

/**
 * Recursively delete a directory and its contents.
 *
 * Deutsch: Löscht ein Verzeichnis mitsamt Inhalt rekursiv.
 *
 * @param string $src Verzeichnispfad
 * @return bool true bei Erfolg, sonst false
 */
function rrmdir(string $src): bool
{
    if (is_dir($src)) {
        $files = array_diff(scandir($src), array('.', '..'));

        foreach ($files as $file) {
            $path = $src . '/' . $file;

            if (is_dir($path)) {
                rrmdir($path);
            } else {
                @unlink($path);
            }
        }

        if (@rmdir($src)) {
            echo 'Der Ordner: ' . $src . ' wurde erfolgreich gelöscht.<br />';
            return true;
        } else {
            echo 'Der Ordner: ' . $src . ' konnte nicht gelöscht werden!<br />';
            return false;
        }
    }
    return false;
}

$installFolder = 'path/to/folder';

if (rrmdir($installFolder)) {
    echo "Der Ordner wurde erfolgreich gelöscht.";
} else {
    echo "Fehler beim Löschen des Ordners.";
}
