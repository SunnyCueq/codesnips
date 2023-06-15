# Dynamic Inclusion of PHP Files

This PHP script demonstrates how to dynamically include PHP files from a specific directory. It uses the `glob()` function to find all PHP files in the "files/" directory and includes them one by one.

## Usage

1. Create a directory named "files/" in the same directory as the PHP script.
2. Place your PHP files inside the "files/" directory.
3. Run the PHP script.
4. The script will scan the "files/" directory and include all the found PHP files.
5. If a file cannot be included or is not readable, an error message will be written to the PHP error log file.

Please note that this script only includes PHP files located in the "files/" directory. Make sure the files contain valid PHP code and are correctly written.

## License

This project is licensed under the [MIT License](LICENSE).


----

# Dynamisches Einbinden von PHP-Dateien

Dieses PHP-Skript zeigt, wie man dynamisch PHP-Dateien aus einem bestimmten Verzeichnis einbinden kann. Es verwendet die Funktion `glob()`, um alle PHP-Dateien im Verzeichnis "files/" zu finden und sie nacheinander einzubinden.

## Verwendung

1. Erstellen Sie ein Verzeichnis namens "files/" im gleichen Verzeichnis wie das PHP-Skript.
2. Legen Sie Ihre PHP-Dateien in das "files/"-Verzeichnis.
3. Führen Sie das PHP-Skript aus.
4. Das Skript durchsucht das "files/"-Verzeichnis und bindet alle gefundenen PHP-Dateien ein.
5. Wenn eine Datei nicht eingebunden werden kann oder nicht lesbar ist, wird eine Fehlermeldung in die PHP-Fehlerprotokolldatei geschrieben.

Bitte beachten Sie, dass dieses Skript nur PHP-Dateien im "files/"-Verzeichnis einbindet. Stellen Sie sicher, dass die Dateien gültigen PHP-Code enthalten und korrekt geschrieben sind.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.
