# Dateigröße in PHP ermitteln

Dieses PHP-Skript zeigt, wie die Größe einer Datei ermittelt werden kann, sei es eine lokale Datei oder eine Datei über eine Remote-URL. Es enthält zwei Funktionen: `format_file_size()` und `get_remote_file_size()`.

## `format_file_size()`

Die Funktion `format_file_size()` nimmt die Dateigröße in Bytes als Parameter und gibt die formatierte Dateigröße zurück. Sie verwendet die Einheiten "B", "KB", "MB", "GB" und "TB", um die Größe entsprechend zu skalieren.

## `get_remote_file_size()`

Die Funktion `get_remote_file_size()` nimmt eine URL als Parameter und verwendet die `get_headers()`-Funktion, um die Größe der entfernten Datei zu ermitteln. Sie ruft die `format_file_size()`-Funktion auf, um die formatierte Größe zurückzugeben.

## Verwendung

1. Geben Sie die URL der Datei als Parameter `$url` an.
2. Die Funktion `get_remote_file_size()` ruft `get_headers()` auf, um die Dateigröße zu ermitteln.
3. Die Funktion `format_file_size()` wird verwendet, um die Dateigröße in eine lesbare Formatierung umzuwandeln.
4. Die formatierte Dateigröße wird ausgegeben oder kann für weitere Verarbeitungszwecke verwendet werden.

Dies ist nützlich, um die Größe von Dateien auf entfernten Servern zu ermitteln.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.

----

# Get File Size in PHP

This PHP script demonstrates how to get the size of a file, whether it's a local file or a file accessed through a remote URL. It includes two functions: `format_file_size()` and `get_remote_file_size()`.

## `format_file_size()`

The `format_file_size()` function takes the file size in bytes as a parameter and returns the formatted file size. It uses units like "B", "KB", "MB", "GB", and "TB" to scale the size accordingly.

## `get_remote_file_size()`

The `get_remote_file_size()` function takes a URL as a parameter and uses the `get_headers()` function to retrieve the size of the remote file. It calls the `format_file_size()` function to return the formatted size.

## Usage

1. Specify the URL of the file as the `$url` parameter.
2. The `get_remote_file_size()` function calls `get_headers()` to retrieve the file size.
3. The `format_file_size()` function is used to convert the file size into a readable format.
4. The formatted file size is outputted or can be used for further processing purposes.

This is useful for getting the size of files on remote servers.

## License

This project is licensed under the [MIT License](LICENSE).
