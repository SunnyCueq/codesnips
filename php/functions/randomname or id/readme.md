# Generierung eines zufälligen Namens mit PHP

Dieses PHP-Skript zeigt, wie man mit PHP einen zufälligen Namen generiert. Es enthält eine Funktion `randomName()`, die einen zufälligen Namen mit der angegebenen Länge generiert.

## Verwendung

1. Geben Sie die gewünschte Länge des zufälligen Namens an.
2. Geben Sie optional `true` für den Parameter `$letters_only` an, wenn der zufällige Name nur aus Buchstaben bestehen soll.
3. Die Funktion `randomName()` generiert entweder einen zufälligen Namen mit zufälligen Bytes (`$letters_only` auf `false` gesetzt) oder einen zufälligen Namen nur mit Buchstaben (`$letters_only` auf `true` gesetzt).
4. Der generierte zufällige Name wird zurückgegeben und kann verwendet oder ausgegeben werden.

Bitte beachten Sie, dass die generierten zufälligen Namen nicht kryptographisch sicher sind. Wenn Sie eine höhere Sicherheit für die Generierung zufälliger Namen benötigen, sollten Sie eine entsprechende kryptographische Funktion oder Bibliothek verwenden.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.

----

# Generating a Random Name with PHP

This PHP script demonstrates how to generate a random name using PHP. It includes a function `randomName()` that generates a random name with the specified length.

## Usage

1. Specify the desired length of the random name.
2. Optionally, specify `true` for the `$letters_only` parameter if the random name should consist of letters only.
3. The `randomName()` function generates either a random name using random bytes (`$letters_only` set to `false`) or a random name using letters only (`$letters_only` set to `true`).
4. The generated random name is returned and can be used or displayed.

Please note that the generated random names are not cryptographically secure. If you require higher security for generating random names, consider using a dedicated cryptographic function or library.

## License

This
