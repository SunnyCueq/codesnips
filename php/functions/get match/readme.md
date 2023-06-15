# Übereinstimmung mit regulärem Ausdruck in PHP

Dieses PHP-Skript zeigt, wie eine Übereinstimmung mit einem regulären Ausdruck in einem Text gefunden werden kann. Es enthält eine Funktion `get_match()`, die den regulären Ausdruck, den Text und optional die Position der Übereinstimmung als Parameter annimmt und die Übereinstimmung zurückgibt.

## Verwendung

1. Geben Sie den regulären Ausdruck als Parameter `$regex` an.
2. Geben Sie den zu durchsuchenden Text als Parameter `$content` an.
3. Geben Sie optional die Position der gewünschten Übereinstimmung als Parameter `$pos` an. Standardmäßig ist dies die Position 1.
4. Die Funktion `get_match()` sucht nach einer Übereinstimmung mit dem regulären Ausdruck im Text und gibt die Übereinstimmung zurück.
5. Wenn eine Übereinstimmung gefunden wird, wird diese zurückgegeben. Andernfalls wird `null` zurückgegeben.

Dies ist nützlich, um Texte nach bestimmten Mustern zu durchsuchen und die Übereinstimmungen zurückzugeben.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.

----

# Regular Expression Match in PHP

This PHP script demonstrates how to find a match with a regular expression in a text. It includes a function `get_match()` that takes the regular expression, the text, and optionally the position of the match as parameters and returns the match.

## Usage

1. Specify the regular expression as the `$regex` parameter.
2. Specify the text to be searched as the `$content` parameter.
3. Optionally specify the position of the desired match as the `$pos` parameter. By default, this is position 1.
4. The `get_match()` function searches for a match with the regular expression in the text and returns the match.
5. If a match is found, it is returned. Otherwise, `null` is returned.

This is useful for searching texts for specific patterns and returning the matches.

## License

This project is licensed under the [MIT License](LICENSE).
