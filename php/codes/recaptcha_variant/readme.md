# Captcha-Überprüfung mit Google reCAPTCHA

Dieses PHP-Skript zeigt, wie man eine Captcha-Überprüfung mit Google reCAPTCHA durchführt. Es überprüft die vom Benutzer eingegebene Captcha-Antwort anhand des geheimen Schlüssels und der Google reCAPTCHA-API.

## Verwendung

1. Stellen Sie sicher, dass Sie über einen geheimen Schlüssel für Google reCAPTCHA verfügen. Ersetzen Sie den Wert von `$secretKey` durch Ihren eigenen geheimen Schlüssel.
2. Rufen Sie das Skript über ein Formular auf, das das Captcha-Widget enthält und die eingegebene Captcha-Antwort an `$_POST['g-recaptcha-response']` sendet.
3. Das Skript sendet eine POST-Anfrage an die Google reCAPTCHA-API, um die Captcha-Antwort zu überprüfen.
4. Die API-Antwort wird als JSON-Daten decodiert und überprüft, ob die Überprüfung erfolgreich war (`$response->success`).
5. Wenn die Überprüfung nicht erfolgreich war, können Sie eine Fehlermeldung anzeigen oder andere Aktionen durchführen.
6. Wenn die Überprüfung erfolgreich war, können Sie den weiteren Verarbeitungscode ausführen.

Bitte beachten Sie, dass Sie das Google reCAPTCHA-Widget und den geheimen Schlüssel korrekt konfigurieren müssen, um die Captcha-Überprüfung ordnungsgemäß durchzuführen.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.
----
# Captcha Verification with Google reCAPTCHA

This PHP script demonstrates how to perform a captcha verification using Google reCAPTCHA. It verifies the captcha response entered by the user using the secret key and the Google reCAPTCHA API.

## Usage

1. Make sure you have a secret key for Google reCAPTCHA. Replace the value of `$secretKey` with your own secret key.
2. Call the script from a form that includes the captcha widget and sends the entered captcha response to `$_POST['g-recaptcha-response']`.
3. The script sends a POST request to the Google reCAPTCHA API to verify the captcha response.
4. The API response is decoded as JSON data and checked if the verification was successful (`$response->success`).
5. If the verification was not successful, you can display an error message or perform other actions.
6. If the verification was successful, you can proceed with your further processing code.

Please note that you need to configure the Google reCAPTCHA widget and secret key correctly to perform the captcha verification properly.

## License

This project is licensed under the [MIT License](LICENSE).
