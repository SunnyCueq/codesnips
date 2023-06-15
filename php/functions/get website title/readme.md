# Abrufen des Seitentitels einer Website mit PHP

Dieses PHP-Skript zeigt, wie man den Seitentitel einer Website abruft. Es enthält eine Funktion `getPageTitle()`, die eine URL als Parameter verwendet und den Seitentitel der Website extrahiert.

## Verwendung

1. Geben Sie die URL der Website an, deren Seitentitel abgerufen werden soll.
2. Das Skript verwendet die `file_get_contents()`-Funktion, um den HTML-Inhalt der angegebenen URL abzurufen.
3. Ein Kontext mit einem benutzerdefinierten User-Agent-Header wird erstellt, um sicherzustellen, dass die Website den Zugriff nicht blockiert.
4. Mithilfe eines regulären Ausdrucks wird der Seitentitel aus dem HTML-Inhalt extrahiert.
5. Das bereinigte Ergebnis wird zurückgegeben.

Bitte beachten Sie, dass einige Websites möglicherweise den Zugriff auf ihren Inhalt beschränken oder den Seitentitel in einer anderen Art und Weise bereitstellen. Das Skript kann je nach Website angepasst werden.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.

----

# Retrieving Website Page Title with PHP

This PHP script demonstrates how to retrieve the page title of a website. It includes a function `getPageTitle()` that takes a URL as a parameter and extracts the page title of the website.

## Usage

1. Specify the URL of the website whose page title you want to retrieve.
2. The script uses the `file_get_contents()` function to retrieve the HTML content of the specified URL.
3. A context with a custom User-Agent header is created to ensure that the website does not block the access.
4. Using a regular expression, the page title is extracted from the HTML content.
5. The cleaned result is returned.

Please note that some websites may restrict access to their content or provide the page title in a different way. The script can be customized depending on the website.

## License

This project is licensed under the [MIT License](LICENSE).
