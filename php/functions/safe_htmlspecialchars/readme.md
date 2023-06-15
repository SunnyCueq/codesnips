# Sichere HTML-Zeichenkodierung mit PHP

Dieses PHP-Skript zeigt, wie man mit PHP eine sichere HTML-Zeichenkodierung durchführt, um potenzielle XSS-Angriffe zu verhindern. Es enthält eine Funktion `safe_htmlspecialchars()`, die den angegebenen Text sicher kodiert.

## Verwendung

1. Geben Sie den zu sichernden Text als Parameter `$chars` an.
2. Die Funktion `safe_htmlspecialchars()` führt zwei Schritte durch:
   - Zunächst werden alle nicht-Unicode-Entities in `&amp;` übersetzt, um die Darstellung von Entities zu verhindern.
   - Anschließend wird der Text mit der Funktion `htmlspecialchars()` sicher kodiert, um spezielle HTML-Zeichen zu ersetzen.
3. Der sichere Text wird zurückgegeben und kann verwendet oder ausgegeben werden.

Bitte beachten Sie, dass eine sichere Zeichenkodierung allein nicht ausreicht, um alle Sicherheitsrisiken im Zusammenhang mit unsicherem HTML oder Cross-Site Scripting (XSS) zu vermeiden. Es ist wichtig, auch andere Sicherheitsmaßnahmen zu implementieren, wie z. B. die Validierung und Filterung von Benutzereingaben.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.

----

# Safe HTML Character Encoding with PHP

This PHP script demonstrates how to perform safe HTML character encoding in order to prevent potential XSS attacks. It includes a function `safe_htmlspecialchars()` that securely encodes the specified text.

## Usage

1. Specify the text to be secured as the `$chars` parameter.
2. The `safe_htmlspecialchars()` function performs two steps:
   - First, it translates all non-Unicode entities into `&amp;` to prevent entity representation.
   - Then, it securely encodes the text using the `htmlspecialchars()` function to replace special HTML characters.
3. The safe text is returned and can be used or displayed.

Please note that safe character encoding alone is not sufficient to mitigate all security risks associated with insecure HTML or cross-site scripting (XSS). It is important to implement other security measures as well, such as validating and filtering user input.

## License

This project is licensed under the [MIT License](LICENSE).
