# Bereinigen von Eingaben in PHP

Dieses PHP-Skript zeigt, wie man Benutzereingaben bereinigen kann, um potenziell schädlichen oder unerwünschten Inhalt zu entfernen. Es enthält eine Funktion `clean_input()`, die den Text als Parameter annimmt und den bereinigten Text zurückgibt.

## Verwendung

1. Geben Sie den zu bereinigenden Text als Parameter `$text` an.
2. Die Funktion `clean_input()` wendet verschiedene Bereinigungsschritte auf den Text an:
   - `strip_tags()`: Entfernt HTML-Tags aus dem Text.
   - `stripslashes()`: Entfernt Slash-Zeichen aus dem Text.
   - `html_entity_decode()`: Wandelt HTML-Entities in ihre entsprechenden Zeichen um.
   - `trim()`: Entfernt überflüssige Leerzeichen am Anfang und Ende des Textes.
3. Der bereinigte Text wird zurückgegeben und kann verwendet oder ausgegeben werden.

Dies ist hilfreich, um sicherzustellen, dass Benutzereingaben sauber und frei von potenziell schädlichem oder unerwünschtem Inhalt sind.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.

----

# Cleaning Input in PHP

This PHP script demonstrates how to clean user input to remove potentially harmful or unwanted content. It includes a function `clean_input()` that takes the text as a parameter and returns the cleaned text.

## Usage

1. Specify the text to be cleaned as the `$text` parameter.
2. The `clean_input()` function applies various cleaning steps to the text:
   - `strip_tags()`: Removes HTML tags from the text.
   - `stripslashes()`: Removes slash characters from the text.
   - `html_entity_decode()`: Converts HTML entities to their corresponding characters.
   - `trim()`: Removes excess whitespace from the beginning and end of the text.
3. The cleaned text is returned and can be used or displayed.

This is helpful to ensure that user input is clean and free from potentially harmful or unwanted content.

## License

This project is licensed under the [MIT License](LICENSE).
