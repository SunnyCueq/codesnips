# Konvertierung von UTF-8-Zeichen in HTML Entities

Dieses PHP-Skript zeigt, wie man UTF-8-Zeichen in HTML-Entitäten konvertiert. Es enthält eine Funktion `utf8_to_htmlentities()`, die eine Zeichenkette mit UTF-8-Zeichen entgegennimmt und sie in eine Zeichenkette mit den entsprechenden HTML-Entitäten umwandelt.

## Verwendung

1. Rufen Sie die Funktion `utf8_to_htmlentities()` mit der zu konvertierenden Zeichenkette als Parameter auf.
2. Das Skript durchläuft jeden einzelnen Buchstaben in der Zeichenkette und ermittelt den Dezimalcode des Zeichens.
3. Wenn der Dezimalcode kleiner oder gleich 128 ist, bleibt der Buchstabe unverändert.
4. Wenn der Dezimalcode größer als 128 ist, wird der Buchstabe in die entsprechende HTML-Entität umgewandelt (z.B. Ä wird zu `&#196;`).
5. Das Skript gibt die konvertierte Zeichenkette aus.

Bitte beachten Sie, dass dieses Skript nur für UTF-8-Zeichen funktioniert. Stellen Sie sicher, dass Ihre Zeichenkette in UTF-8 codiert ist, bevor Sie sie der Funktion übergeben.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.
----
# Converting UTF-8 Characters to HTML Entities

This PHP script demonstrates how to convert UTF-8 characters to HTML entities. It includes a function `utf8_to_htmlentities()` that takes a string containing UTF-8 characters and converts it to a string with the corresponding HTML entities.

## Usage

1. Call the `utf8_to_htmlentities()` function with the string to be converted as the parameter.
2. The script iterates through each individual character in the string and determines the decimal code of the character.
3. If the decimal code is less than or equal to 128, the letter remains unchanged.
4. If the decimal code is greater than 128, the letter is converted to the corresponding HTML entity (e.g., Ä becomes `&#196;`).
5. The script outputs the converted string.

Please note that this script works only for UTF-8 characters. Make sure that your string is encoded in UTF-8 before passing it to the function.

## License

This project is licensed under the [MIT License](LICENSE).
