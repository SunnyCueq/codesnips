# Löschen eines Ordners mit PHP

Dieses PHP-Skript zeigt, wie man mit PHP einen Ordner und alle seine Unterordner und Dateien rekursiv löscht. Es enthält eine Funktion `rrmdir()`, die den angegebenen Ordner löscht.

## Verwendung

1. Geben Sie den Pfad zum Ordner an, der gelöscht werden soll.
2. Das Skript überprüft, ob der angegebene Pfad ein Verzeichnis ist.
3. Wenn der Pfad ein Verzeichnis ist, werden alle Dateien und Unterordner im Verzeichnis abgerufen.
4. Für jeden Eintrag im Verzeichnis wird überprüft, ob es sich um ein Verzeichnis handelt. Wenn ja, wird `rrmdir()` rekursiv aufgerufen, um den Unterordner zu löschen. Wenn es sich um eine Datei handelt, wird diese mit `unlink()` gelöscht.
5. Nachdem alle Unterordner und Dateien im Verzeichnis gelöscht wurden, wird das Verzeichnis selbst mit `rmdir()` gelöscht.
6. Wenn das Löschen erfolgreich ist, wird `true` zurückgegeben. Andernfalls wird `false` zurückgegeben.

Bitte beachten Sie, dass das Löschen eines Ordners und seiner Inhalte irreversible Auswirkungen hat. Stellen Sie sicher, dass Sie den richtigen Ordner angeben und dass Sie über ausreichende Berechtigungen verfügen, um den Ordner und seine Inhalte zu löschen.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.

----

# Deleting a Folder with PHP

This PHP script demonstrates how to delete a folder and all its subfolders and files recursively using PHP. It includes a function `rrmdir()` that deletes the specified folder.

## Usage

1. Specify the path to the folder that should be deleted.
2. The script checks if the specified path is a directory.
3. If the path is a directory, it retrieves all files and subdirectories within the directory.
4. For each entry in the directory, it checks if it is a directory. If it is, `rrmdir()` is called recursively to delete the subdirectory. If it is a file, it is deleted using `unlink()`.
5. After all subdirectories and files within the directory are deleted, the directory itself is deleted using `rmdir()`.
6. If the deletion is successful, it returns `true`. Otherwise, it returns `false`.

Please note that deleting a folder and its contents has irreversible effects. Make sure you specify the correct folder and have sufficient permissions to delete the folder and its contents.

## License

This project is licensed under the [MIT License](LICENSE).
