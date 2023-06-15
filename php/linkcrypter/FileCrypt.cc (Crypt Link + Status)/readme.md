# Dateien mit Filecrypt.cc verschlüsseln

Dieses PHP-Skript zeigt, wie Dateien mit der Filecrypt-API verschlüsselt werden können. Es enthält eine Funktion `fileCrypt()`, die Download-Links und andere Informationen als Parameter verwendet und eine Anfrage an die Filecrypt-API sendet, um einen verschlüsselten Container mit den angegebenen Links zu erstellen.

## Verwendung

1. Setzen Sie Ihren Filecrypt-API-Schlüssel, die Download-Links und den Ordnernamen in den entsprechenden Variablen ein.
2. Rufen Sie die Funktion `fileCrypt()` mit den Parametern auf.
3. Die Funktion `fileCrypt()` erstellt eine CURL-Anfrage an die Filecrypt-API und gibt ein Array mit den Filecrypt-Links zurück.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.

----

# Encrypt Files with Filecrypt.cc

This PHP script demonstrates how to encrypt files using the Filecrypt API. It includes a function `fileCrypt()` that takes download links and other information as parameters and sends a request to the Filecrypt API to create an encrypted container with the specified links.

## Usage

1. Set your Filecrypt API key, download links, and folder name in the respective variables.
2. Call the `fileCrypt()` function with the parameters.
3. The `fileCrypt()` function creates a CURL request to the Filecrypt API and returns an array with the Filecrypt links.

## License

This project is licensed under the [MIT License](LICENSE).
