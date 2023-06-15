# Dynamisches Einbinden von PHP-Dateien mit benutzerdefiniertem Ordner

Dieses PHP-Skript zeigt, wie man dynamisch PHP-Dateien aus einem benutzerdefinierten Verzeichnis einbinden kann. Es verwendet die Funktion `glob()`, um alle PHP-Dateien im angegebenen Ordner zu finden und sie nacheinander einzubinden.

## Verwendung

1. Führen Sie das PHP-Skript aus.
2. Sie werden zur Eingabe des Ordnerpfads aufgefordert. Lassen Sie das Feld leer, um den Standardordner 'files' zu verwenden.
3. Das Skript durchsucht den angegebenen Ordner (oder den Standardordner 'files') und bindet alle gefundenen PHP-Dateien ein.
4. Wenn eine Datei nicht eingebunden werden kann oder nicht lesbar ist, wird eine Fehlermeldung in die PHP-Fehlerprotokolldatei geschrieben.

Bitte beachten Sie, dass dieses Skript nur PHP-Dateien im angegebenen Ordner einbindet. Stellen Sie sicher, dass die Dateien gültigen PHP-Code enthalten und korrekt geschrieben sind.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.
----
# Dynamic Inclusion of PHP Files with Custom Folder

This PHP script demonstrates how to dynamically include PHP files from a custom folder. It uses the `glob()` function to find all PHP files in the specified folder and includes them one by one.

## Usage

1. Run the PHP script.
2. You will be prompted to enter the folder path. Leave it blank to use the default folder 'files'.
3. The script will scan the specified folder (or the default folder 'files') and include all the found PHP files.
4. If a file cannot be included or is not readable, an error message will be written to the PHP error log file.

Please note that this script only includes PHP files located in the specified folder. Make sure the files contain valid PHP code and are correctly written.

## License

This project is licensed under the [MIT License](LICENSE).
