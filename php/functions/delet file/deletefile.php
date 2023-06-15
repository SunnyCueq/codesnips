<?php

function delete_file($install_file) {
    if (!file_exists($install_file)) {
        throw new Exception('Die Datei: ' . $install_file . ' ist nicht vorhanden!');
    }

    if (!unlink($install_file)) {
        throw new Exception('Die Datei: ' . $install_file . ' konnte nicht gelöscht werden!');
    }

    return 'Die Datei: ' . $install_file . ' wurde erfolgreich gelöscht.';
}

try {
    $install_file = '/pfad/zur/datei';
    echo delete_file($install_file);
} catch (Exception $e) {
    echo $e->getMessage();
}
