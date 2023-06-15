# HTML-Escapes in PHP entschlüsseln

Dieses PHP-Skript zeigt, wie man HTML-escapte Zeichen in PHP entschlüsseln kann. Es enthält eine Funktion `un_htmlspecialchars()`, die den HTML-enthaltenen Text in seinen ursprünglichen Zustand zurückversetzt.

## Verwendung

1. Geben Sie den zu entschlüsselnden HTML-Text als Parameter `$text` an.
2. Die Funktion `un_htmlspecialchars()` verwendet `html_entity_decode()` mit den erforderlichen Optionen, um den Text zu entschlüsseln und die HTML-Escape-Zeichen in ihren ursprünglichen Zustand zurückzusetzen.
3. Der entschlüsselte Text wird zurückgegeben und kann verwendet oder ausgegeben werden.

Bitte beachten Sie, dass das Entschlüsseln von HTML-Escape-Zeichen sinnvoll ist, wenn Sie den ursprünglichen Text wiederherstellen möchten. Es kann nützlich sein, wenn Sie Benutzereingaben verarbeiten oder HTML-Text in einer bestimmten Umgebung anzeigen möchten.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.

----

# Decoding HTML Escapes in PHP

This PHP script demonstrates how to decode HTML-escaped characters in PHP. It includes a function `un_htmlspecialchars()` that restores the HTML-encoded text to its original state.

## Usage

1. Specify the HTML-encoded text to be decoded as the `$text` parameter.
2. The `un_htmlspecialchars()` function uses `html_entity_decode()` with the necessary options to decode the text and restore the HTML-escaped characters to their original state.
3. The decoded text is returned and can be used or displayed.

Please note that decoding HTML escapes is useful when you need to restore the original text. It can be helpful when processing user inputs or displaying HTML text in a specific environment.

## License

This project is licensed under the [MIT License](LICENSE).
