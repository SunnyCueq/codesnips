# Verzeichnis mit PHP erstellen

Dieses PHP-Skript zeigt, wie man mit PHP ein Verzeichnis erstellt. Es enthält eine Funktion `_mkdir()`, die das gewünschte Verzeichnis erstellt, falls es nicht bereits vorhanden ist.

## Verwendung

1. Geben Sie den Pfad zum Verzeichnis an, das erstellt werden soll.
2. Das Skript verwendet die Funktion `is_dir()` zum Überprüfen, ob das Verzeichnis bereits existiert.
3. Wenn das Verzeichnis bereits existiert, wird `true` zurückgegeben.
4. Wenn das Verzeichnis nicht existiert, wird versucht, es mit der Funktion `mkdir()` zu erstellen.
5. Die Funktion `mkdir()` wird mit dem angegebenen Verzeichnis, den gewünschten Berechtigungen und dem rekursiven Modus aufgerufen.
6. Wenn das Erstellen des Verzeichnisses erfolgreich ist, wird `true` zurückgegeben.
7. Andernfalls wird geprüft, ob das übergeordnete Verzeichnis beschreibbar ist, und erneut versucht, das Verzeichnis zu erstellen.
8. Wenn auch dies fehlschlägt, wird `false` zurückgegeben.

Bitte beachten Sie, dass die Berechtigungen des übergeordneten Verzeichnisses und die Serverkonfiguration die Erstellung des Verzeichnisses beeinflussen können.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.

----

# Creating Directory with PHP

This PHP script demonstrates how to create a directory using PHP. It includes a function `_mkdir()` that creates the desired directory if it doesn't already exist.

## Usage

1. Specify the path to the directory that should be created.
2. The script uses the `is_dir()` function to check if the directory already exists.
3. If the directory already exists, it returns `true`.
4. If the directory doesn't exist, it attempts to create it using the `mkdir()` function.
5. The `mkdir()` function is called with the specified directory, the desired permissions, and the recursive mode.
6. If the directory creation is successful, it returns `true`.
7. Otherwise, it checks if the parent directory is writable and attempts to create the directory again.
8. If all attempts fail, it returns `false`.

Please note that the permissions of the parent directory and server configuration can affect the creation of the directory.

## License

This project is licensed under the [MIT License](LICENSE).
