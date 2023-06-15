# Unicode in UTF-8 in PHP umwandeln

Dieses PHP-Skript zeigt, wie man einen Unicode-Zeichenwert in UTF-8 umwandeln kann. Es enthält eine Funktion `uni_to_utf8()`, die den Unicode-Zeichenwert als Parameter annimmt und das entsprechende UTF-8-Zeichen zurückgibt.

## Verwendung

1. Geben Sie den Unicode-Zeichenwert als Parameter `$char` an.
2. Die Funktion `uni_to_utf8()` konvertiert den Zeichenwert in eine UTF-8-Zeichenkette, indem sie den Zeichenwert in das entsprechende HTML-Entity umwandelt und dann mit `mb_convert_encoding()` in UTF-8 kodiert.
3. Das UTF-8-Zeichen wird zurückgegeben und kann verwendet oder ausgegeben werden.

Dies kann nützlich sein, wenn Sie Unicode-Zeichen in Ihrem PHP-Code verwenden und sie in das UTF-8-Format umwandeln müssen.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.

----

# Converting Unicode to UTF-8 in PHP

This PHP script demonstrates how to convert a Unicode character value to UTF-8. It includes a function `uni_to_utf8()` that takes the Unicode character value as a parameter and returns the corresponding UTF-8 character.

## Usage

1. Specify the Unicode character value as the `$char` parameter.
2. The `uni_to_utf8()` function converts the character value to a UTF-8 string by converting the character value to the corresponding HTML entity and then encoding it to UTF-8 using `mb_convert_encoding()`.
3. The UTF-8 character is returned and can be used or displayed.

This can be useful when working with Unicode characters in your PHP code and need to convert them to the UTF-8 format.

## License

This project is licensed under the [MIT License](LICENSE).
