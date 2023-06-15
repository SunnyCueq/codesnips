# CNL (Copy 'n' Load) URL erstellen in PHP

Dieses PHP-Skript zeigt, wie eine CNL (Copy 'n' Load) URL erstellt wird. Es enthält eine Funktion `cnl()`, die eine Zeichenkette von Links annimmt und sie in das CNL-Format umwandelt. Die Funktion führt auch eine URL-Codierung der Links durch.

## Verwendung

1. Geben Sie eine Zeichenkette von Links als Parameter `$links` an.
2. Die Funktion `cnl()` prüft, ob der Parameter eine Zeichenkette ist. Andernfalls wird eine `Exception` geworfen.
3. Der Zeilenumbruch in den Links wird durch `/r/n` ersetzt.
4. Die Links werden mit `urlencode()` URL-codiert.
5. Die CNL-URL wird mit den umgewandelten und codierten Links erstellt.
6. Die CNL-URL wird zurückgegeben.

CNL-URLs werden häufig für den Massendownload von Dateien in JDownloader verwendet.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.

----

# Create CNL (Copy 'n' Load) URL in PHP

This PHP script demonstrates how to create a CNL (Copy 'n' Load) URL. It includes a function `cnl()` that takes a string of links and converts them to the CNL format. The function also performs URL encoding of the links.

## Usage

1. Specify a string of links as the parameter `$links`.
2. The `cnl()` function checks if the parameter is a string. Otherwise, it throws an `Exception`.
3. The line breaks in the links are replaced with `/r/n`.
4. The links are URL-encoded using `urlencode()`.
5. The CNL URL is created with the converted and encoded links.
6. The CNL URL is returned.

CNL URLs are commonly used for mass file download in JDownloader.

## License

This project is licensed under the [MIT License](LICENSE).
