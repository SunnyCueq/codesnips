<?php
declare(strict_types=1);

// Funktion zum Löschen einer Datei
// Function to delete a file
/**
 * Delete a file or throw an exception if it fails.
 *
 * Deutsch: Löscht eine Datei oder wirft eine Exception bei Fehler.
 *
 * @param string $install_file Pfad zur Datei
 * @return string Erfolgsmeldung
 * @throws RuntimeException wenn Datei fehlt oder nicht löschbar ist
 */
function delete_file(string $install_file): string {
    // Überprüfen, ob die Datei existiert
    // Check if the file exists
    if (!file_exists($install_file)) {
        // Wenn die Datei nicht existiert, werfen Sie eine Ausnahme
        // If the file does not exist, throw an exception
        throw new RuntimeException('Die Datei: ' . $install_file . ' ist nicht vorhanden!'); // The file is not existent
    }

    // Versuchen, die Datei zu löschen
    // Try to delete the file
    if (!unlink($install_file)) {
        // Wenn die Datei nicht gelöscht werden kann, werfen Sie eine Ausnahme
        // If the file can't be deleted, throw an exception
        throw new RuntimeException('Die Datei: ' . $install_file . ' konnte nicht gelöscht werden!'); // The file could not be deleted
    }

    // Wenn die Datei erfolgreich gelöscht wurde, geben Sie eine Erfolgsmeldung zurück
    // If the file was successfully deleted, return a success message
    return 'Die Datei: ' . $install_file . ' wurde erfolgreich gelöscht.'; // The file was successfully deleted
}

try {
    $install_file = '/pfad/zur/datei'; // Pfad zur zu löschenden Datei
    // Verwenden Sie die delete_file-Funktion und geben Sie das Ergebnis aus
    // Use the delete_file function and output the result
    echo delete_file($install_file);
} catch (Throwable $e) {
    // Wenn eine Ausnahme auftritt, geben Sie die Fehlermeldung aus
    // If an exception occurs, output the error message
    echo $e->getMessage();
}
