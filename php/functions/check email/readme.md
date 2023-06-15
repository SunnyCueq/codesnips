# Überprüfen einer E-Mail-Adresse mit PHP

Dieses PHP-Skript demonstriert, wie man mit PHP die Gültigkeit einer E-Mail-Adresse überprüft. Es enthält eine Funktion `check_email()`, die die angegebene E-Mail-Adresse anhand eines regulären Ausdrucks überprüft.

## Verwendung

1. Geben Sie die E-Mail-Adresse an, die überprüft werden soll.
2. Das Skript verwendet den regulären Ausdruck `/^[-!#$%&'*+\/0-9=?A-Z^_`{|}~]+@([-0-9A-Z]+\.)+[0-9A-Z]{2,}$/i`, um die Gültigkeit der E-Mail-Adresse zu überprüfen.
3. Die Funktion `preg_match()` wird verwendet, um den regulären Ausdruck auf die E-Mail-Adresse anzuwenden. Wenn das Muster übereinstimmt, wird `1` zurückgegeben, andernfalls `0`.
4. Die Funktion `check_email()` gibt `true` zurück, wenn das Ergebnis von `preg_match()` `1` ist, was bedeutet, dass die E-Mail-Adresse gültig ist. Andernfalls gibt sie `false` zurück.

Bitte beachten Sie, dass dieser einfache reguläre Ausdruck möglicherweise nicht alle möglichen E-Mail-Adressen abdeckt. Es wird empfohlen, eine umfassendere Validierung oder eine externe E-Mail-Validierungsbibliothek zu verwenden, wenn eine strengere Validierung erforderlich ist.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.

----

# Checking an Email Address with PHP

This PHP script demonstrates how to validate the validity of an email address using PHP. It includes a function `check_email()` that validates the given email address using a regular expression.

## Usage

1. Specify the email address to be checked.
2. The script uses the regular expression `/^[-!#$%&'*+\/0-9=?A-Z^_`{|}~]+@([-0-9A-Z]+\.)+[0-9A-Z]{2,}$/i` to validate the email address.
3. The function `preg_match()` is used to apply the regular expression to the email address. If the pattern matches, it returns `1`, otherwise `0`.
4. The `check_email()` function returns `true` if the result of `preg_match()` is `1`, indicating that the email address is valid. Otherwise, it returns `false`.

Please note that this simple regular expression may not cover all possible email addresses. It is recommended to use a more comprehensive validation or an external email validation library if stricter validation is required.

## License

This project is licensed under the [MIT License](LICENSE).
