# Umbenennen von Dateien mit PowerShell

Dieses PowerShell-Skript ermöglicht das Umbenennen von Dateien mit einer bestimmten Quell-Dateiendung in eine Ziel-Dateiendung. Es verwendet das `Get-ChildItem` Cmdlet, um alle Dateien im angegebenen Verzeichnis und seinen Unterverzeichnissen zu durchsuchen. Anschließend wird für jede Datei der Dateiname geändert, indem die Quell-Dateiendung durch die Ziel-Dateiendung ersetzt wird.

## Verwendung

1. Führen Sie das PowerShell-Skript aus.
2. Geben Sie den Pfad zum Verzeichnis ein, in dem sich die Dateien befinden.
3. Geben Sie die Quell-Dateiendung ein, die umbenannt werden soll.
4. Geben Sie die Ziel-Dateiendung ein, in die umbenannt werden soll.
5. Das Skript durchsucht das angegebene Verzeichnis und alle Unterverzeichnisse nach Dateien mit der angegebenen Quell-Dateiendung.
6. Jede gefundene Datei wird umbenannt, indem die Quell-Dateiendung durch die Ziel-Dateiendung ersetzt wird.
7. Das Skript gibt eine Erfolgsmeldung aus, nachdem der Umbenennungsvorgang abgeschlossen ist.

Bitte beachten Sie, dass das Skript Dateien mit der exakten Übereinstimmung der Quell-Dateiendung umbenennt. Stellen Sie sicher, dass Sie die richtigen Dateiendungen angeben, um unerwünschte Umbenennungen zu vermeiden.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.
----
# Renaming Files with PowerShell

This PowerShell script allows you to rename files with a specific source file extension to a target file extension. It uses the `Get-ChildItem` cmdlet to search for all files in the specified directory and its subdirectories. Then, for each file, it changes the file name by replacing the source file extension with the target file extension.

## Usage

1. Run the PowerShell script.
2. Enter the path to the directory where the files are located.
3. Enter the source file extension to be renamed.
4. Enter the target file extension to rename to.
5. The script will search the specified directory and all its subdirectories for files with the specified source file extension.
6. Each found file will be renamed by replacing the source file extension with the target file extension.
7. The script will output a success message after the renaming process is completed.

Please note that the script renames files with an exact match of the source file extension. Make sure to specify the correct file extensions to avoid unwanted renaming.

## License

This project is licensed under the [MIT License](LICENSE).
