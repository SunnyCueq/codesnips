# Entfernen von NFO-Zeichen aus einem Text mit PHP

Dieses PHP-Skript zeigt, wie man NFO-Zeichen aus einem Text entfernt. Es enthält eine Funktion `nfo_stripper()`, die den Text als Parameter verwendet und die NFO-Zeichen mithilfe von regulären Ausdrücken entfernt.

## Verwendung

1. Geben Sie den Text ein, aus dem die NFO-Zeichen entfernt werden sollen.
2. Die `nfo_stripper()`-Funktion verwendet reguläre Ausdrücke, um die NFO-Zeichen zu entfernen.
3. Die Funktion verwendet `preg_replace()` zum Ersetzen von Zeichenfolgen basierend auf einem regulären Ausdruck.
4. Der erste reguläre Ausdruck `/[^a-zA-Z0-9öäüÖÄÜß\\-_?!&[\\]().,;:+=#*~@\\/\\\\'"><\\s]/u` entfernt alle Zeichen, die nicht Buchstaben, Zahlen oder bestimmte Sonderzeichen sind.
5. Die weiteren regulären Ausdrücke passen die Leerzeichen im Text an, um unnötige Leerzeichen und Zeilenumbrüche zu entfernen und den Text zu bereinigen.
6. Das bereinigte Ergebnis wird zurückgegeben.

Bitte beachten Sie, dass die Funktion möglicherweise an Ihre spezifischen Anforderungen angepasst werden muss, je nachdem, welche NFO-Zeichen entfernt werden sollen.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.

----

# Removing NFO Characters from Text with PHP

This PHP script demonstrates how to remove NFO characters from a text. It includes a function `nfo_stripper()` that takes the text as a parameter and removes the NFO characters using regular expressions.

## Usage

1. Enter the text from which you want to remove the NFO characters.
2. The `nfo_stripper()` function uses regular expressions to remove the NFO characters.
3. The function uses `preg_replace()` to replace strings based on a regular expression.
4. The first regular expression `/[^a-zA-Z0-9öäüÖÄÜß\\-_?!&[\\]().,;:+=#*~@\\/\\\\'"><\\s]/u` removes any characters that are not letters, numbers, or certain special characters.
5. The subsequent regular expressions adjust the spacing in the text to remove unnecessary whitespace and line breaks, cleaning up the text.
6. The cleaned result is returned.

Please note that the function may need to be customized to fit your specific requirements depending on which NFO characters you want to remove.

## License

This project is licensed under the [MIT License](LICENSE).
