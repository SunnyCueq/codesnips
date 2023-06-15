<?php

function _mkdir($dir, $chmod = CHMOD_DIRS)
{
    if (is_dir($dir)) {
        return true;
    }

    if (@mkdir($dir, $chmod, true)) {
        return true;
    }

    if (is_writable(dirname($dir)) && @mkdir($dir, $chmod)) {
        return true;
    }

    return false;
}

$directory = 'path/to/directory';

if (_mkdir($directory)) {
    echo "Verzeichnis erfolgreich erstellt.";
} else {
    echo "Fehler beim Erstellen des Verzeichnisses.";
}
