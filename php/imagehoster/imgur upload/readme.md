# Upload auf Imgur mit PHP

Dieses PHP-Skript zeigt, wie ein Bild mithilfe der Imgur-API hochgeladen werden kann. Es enthält eine Funktion `imGUR()`, die den temporären Pfad des Bildes als Parameter verwendet und den Upload auf Imgur durchführt.

## Verwendung

1. Setzen Sie Ihren Imgur-API-Schlüssel, Ihren Skript-Link und eine Zufallszahl in den entsprechenden Variablen ein.
2. Geben Sie den Pfad zu Ihrem Bild als Parameter in der Funktion `imGUR()` an.
3. Die Funktion `imGUR()` erstellt eine CURL-Anfrage an die Imgur-API und lädt das Bild hoch.
4. Das Ergebnis der Anfrage wird zurückgegeben, was in diesem Fall der Link zum hochgeladenen Bild ist.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.

----

# Imgur Upload with PHP

This PHP script demonstrates how to upload an image to Imgur using the Imgur API. It includes a function `imGUR()` that takes the temporary path of the image as a parameter and performs the upload to Imgur.

## Usage

1. Set your Imgur API key, script link, and a random number in the respective variables.
2. Specify the path to your image as a parameter in the `imGUR()` function.
3. The `imGUR()` function creates a CURL request to the Imgur API and uploads the image.
4. The result of the request is returned, which in this case is the link to the uploaded image.

## License

This project is licensed under the [MIT License](LICENSE).
