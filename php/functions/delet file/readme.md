# Datei löschen in PHP

Dieses PHP-Skript zeigt, wie eine Datei gelöscht werden kann. Es enthält eine Funktion `delete_file()`, die den Dateipfad als Parameter annimmt und die Datei löscht. Die Funktion wirft eine `Exception`, wenn die Datei nicht vorhanden ist oder nicht gelöscht werden kann.

## Verwendung

1. Geben Sie den Dateipfad als Parameter `$install_file` an.
2. Die Funktion `delete_file()` prüft zunächst, ob die Datei existiert.
3. Wenn die Datei existiert, wird sie mit `unlink()` gelöscht.
4. Wenn das Löschen erfolgreich ist, wird eine Erfolgsmeldung zurückgegeben.
5. Wenn ein Fehler auftritt, wird eine `Exception` mit der entsprechenden Fehlermeldung geworfen.

Dies ist nützlich, um Dateien in PHP zu verwalten, z. B. beim Löschen von temporären Dateien oder alten Dateiversionen.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.

----

# Delete File in PHP

This PHP script demonstrates how to delete a file. It includes a function `delete_file()` that takes the file path as a parameter and deletes the file. The function throws an `Exception` if the file doesn't exist or cannot be deleted.

## Usage

1. Specify the file path as the parameter `$install_file`.
2. The `delete_file()` function first checks if the file exists.
3. If the file exists, it is deleted using `unlink()`.
4. If the deletion is successful, a success message is returned.
5. If an error occurs, an `Exception` is thrown with the corresponding error message.

This is useful for managing files in PHP, such as deleting temporary files or old file versions.

## License

This project is licensed under the [MIT License](LICENSE).
