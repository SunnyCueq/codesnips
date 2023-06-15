# Größe eines Verzeichnisses in PHP ermitteln

Dieses PHP-Skript zeigt, wie die Größe eines Verzeichnisses ermittelt werden kann. Es enthält eine Funktion `get_dir_size()`, die das Verzeichnis als Parameter annimmt und die Gesamtgröße des Verzeichnisses in Bytes zurückgibt.

## Verwendung

1. Geben Sie das zu überprüfende Verzeichnis als Parameter `$dir` an.
2. Die Funktion `get_dir_size()` verwendet eine rekursive Iteration, um alle Dateien im Verzeichnis und seinen Unterverzeichnissen zu durchlaufen und die Größe jedes einzelnen Elements zu erfassen.
3. Die Gesamtgröße des Verzeichnisses wird als Summe aller Dateigrößen berechnet und zurückgegeben.

Dies ist nützlich, um die Größe eines Verzeichnisses zu ermitteln, beispielsweise um den Speicherplatzbedarf zu überwachen.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.

----

# Get Directory Size in PHP

This PHP script demonstrates how to get the size of a directory. It includes a function `get_dir_size()` that takes the directory as a parameter and returns the total size of the directory in bytes.

## Usage

1. Specify the directory to be checked as the `$dir` parameter.
2. The `get_dir_size()` function uses recursive iteration to traverse all files in the directory and its subdirectories and collects the size of each individual element.
3. The total size of the directory is calculated as the sum of all file sizes and returned.

This is useful for determining the size of a directory, for example, to monitor disk space usage.

## License

This project is licensed under the [MIT License](LICENSE).
