# URL-Ersetzung in PHP

Dieses PHP-Skript zeigt, wie URLs in einem Text durch anklickbare Links ersetzt werden können. Es enthält eine Funktion `replace_url()`, die den Text als Parameter annimmt und den Text mit ersetzen URLs zurückgibt.

## Verwendung

1. Geben Sie den zu verarbeitenden Text als Parameter `$text` an.
2. Die Funktion `replace_url()` sucht nach URLs im Text und ersetzt sie durch HTML-Links.
   - Es werden sowohl URLs mit dem Format `www.example.com` als auch URLs mit dem Format `http://example.com` erkannt.
   - Die URLs werden in `<a>`-Tags mit dem Attribut `target="_blank"` (öffnet den Link in einem neuen Tab) und dem Attribut `rel="nofollow"` (verhindert das Verfolgen des Links durch Suchmaschinen) umgewandelt.
   - E-Mail-Adressen wie `info@example.com` werden ebenfalls erkannt und als anklickbare Links formatiert.
3. Der Text mit ersetzen URLs wird zurückgegeben und kann verwendet oder ausgegeben werden.

Dies ist nützlich, um Texte mit URLs in HTML-Formatierung anzuzeigen.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.

----

# URL Replacement in PHP

This PHP script demonstrates how to replace URLs in a text with clickable links. It includes a function `replace_url()` that takes the text as a parameter and returns the text with replaced URLs.

## Usage

1. Specify the text to be processed as the `$text` parameter.
2. The `replace_url()` function searches for URLs in the text and replaces them with HTML links.
   - It recognizes URLs in both the format `www.example.com` and `http://example.com`.
   - The URLs are converted into `<a>` tags with the attribute `target="_blank"` (opens the link in a new tab) and the attribute `rel="nofollow"` (prevents the link from being followed by search engines).
   - Email addresses like `info@example.com` are also recognized and formatted as clickable links.
3. The text with replaced URLs is returned and can be used or displayed.

This is useful for displaying texts with URLs in HTML formatting.

## License

This project is licensed under the [MIT License](LICENSE).
