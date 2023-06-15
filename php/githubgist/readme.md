# GitHub Gist erstellen mit PHP

Dieses PHP-Skript zeigt, wie ein GitHub Gist mit dem GitHub API erstellt werden kann. Es enthält eine Funktion `githubGist()`, die den übergebenen Code, den Titel und den Hash verwendet, um einen neuen Gist zu erstellen.

## Verwendung

1. Geben Sie den Code, den Titel und den Hash als Parameter an.
2. Die Funktion `githubGist()` konstruiert die Daten für den API-Aufruf als JSON und sendet den POST-Anfrage an die GitHub API.
3. Das Ergebnis wird als JSON zurückgegeben und dekodiert.
4. Der Link zum erstellten Gist wird aus dem Ergebnis extrahiert und zurückgegeben.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.

----

# Create GitHub Gist with PHP

This PHP script demonstrates how to create a GitHub Gist using the GitHub API. It includes a function `githubGist()` that takes the provided code, title, and hash to create a new Gist.

## Usage

1. Specify the code, title, and hash as parameters.
2. The `githubGist()` function constructs the data for the API call as JSON and sends the POST request to the GitHub API.
3. The result is returned as JSON and decoded.
4. The link to the created Gist is extracted from the result and returned.

## License

This project is licensed under the [MIT License](LICENSE).
