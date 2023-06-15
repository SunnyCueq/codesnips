# Erstellen eines ZIP-Archivs mit PHP

Dieses PHP-Skript zeigt, wie man ein ZIP-Archiv erstellt, das eine Reihe von Dateien aus einem angegebenen Verzeichnis enthält. Es verwendet die ZipArchive-Klasse, um das ZIP-Archiv zu erstellen und die angegebenen Dateien hinzuzufügen.

## Verwendung

1. Geben Sie den Pfad zum Verzeichnis an, das die Dateien enthält, die in das ZIP-Archiv aufgenommen werden sollen.
2. Geben Sie den Namen für das ZIP-Archiv an.
3. Das Skript verwendet die `scandir()`-Funktion, um eine Liste der Dateien im angegebenen Verzeichnis abzurufen.
4. Für jede Datei in der Liste wird die `addFile()`-Methode der ZipArchive-Klasse aufgerufen, um die Datei zum ZIP-Archiv hinzuzufügen.
5. Das Skript schließt das ZIP-Archiv mit der `close()`-Methode.
6. Wenn das ZIP-Archiv erfolgreich erstellt wurde, wird eine Erfolgsmeldung angezeigt, die den Dateinamen und die Dateigröße enthält.
7. Der Benutzer kann auf den bereitgestellten Link klicken, um das ZIP-Archiv herunterzuladen.

Bitte beachten Sie, dass Sie die erforderlichen Schreibberechtigungen für das Erstellen des ZIP-Archivs und den Zugriff auf die angegebenen Dateien haben müssen.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.

----

# Creating a ZIP Archive with PHP

This PHP script demonstrates how to create a ZIP archive that includes a set of files from a specified directory. It uses the ZipArchive class to create the ZIP archive and add the specified files.

## Usage

1. Specify the path to the directory that contains the files to be included in the ZIP archive.
2. Specify the name for the ZIP archive.
3. The script uses the `scandir()` function to retrieve a list of files in the specified directory.
4. For each file in the list, it calls the `addFile()` method of the ZipArchive class to add the file to the ZIP archive.
5. The script closes the ZIP archive using the `close()` method.
6. If the ZIP archive is created successfully, a success message is displayed that includes the file name and file size.
7. The user can click on the provided link to download the ZIP archive.

Please note that you need to have the necessary write permissions to create the ZIP archive and access the specified files.

## License

This project is licensed under the [MIT License](LICENSE).
