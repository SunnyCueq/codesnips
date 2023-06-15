# Formatierung eines Datums mit PHP

Dieses PHP-Skript zeigt, wie man mit PHP ein Datum formatiert. Es enthält eine Funktion `format_date()`, die das angegebene Datum mit dem angegebenen Format formatiert.

## Verwendung

1. Geben Sie das gewünschte Format an, in dem das Datum formatiert werden soll. Zum Beispiel `'Y-m-d H:i:s'` für das Format "Jahr-Monat-Tag Stunde:Minute:Sekunde".
2. Geben Sie den Zeitstempel an, der formatiert werden soll. Sie können `time()` verwenden, um den aktuellen Zeitstempel zu erhalten.
3. Die Funktion `format_date()` erstellt ein `DateTime`-Objekt und setzt den angegebenen Zeitstempel. Sie berücksichtigt auch eine optionale Zeitzone-Verschiebung, wenn die Konstante `TIME_OFFSET` definiert ist.
4. Das `DateTime`-Objekt wird mit dem angegebenen Format formatiert und das formatierte Datum wird zurückgegeben.

Bitte beachten Sie, dass das Formatzeichen in der Formatierung der Datumsangabe spezifischen Konventionen folgen muss. Eine Übersicht der verfügbaren Formatzeichen finden Sie in der [PHP-Dokumentation](https://www.php.net/manual/en/datetime.format.php).

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.

----

# Formatting a Date with PHP

This PHP script demonstrates how to format a date using PHP. It includes a function `format_date()` that formats the given date with the specified format.

## Usage

1. Specify the desired format in which the date should be formatted. For example, `'Y-m-d H:i:s'` for the format "Year-Month-Day Hour:Minute:Second".
2. Specify the timestamp that should be formatted. You can use `time()` to get the current timestamp.
3. The `format_date()` function creates a `DateTime` object and sets the specified timestamp. It also takes into account an optional timezone offset if the constant `TIME_OFFSET` is defined.
4. The `DateTime` object is formatted with the specified format, and the formatted date is returned.

Please note that the format characters in the date formatting must follow specific conventions. For an overview of the available format characters, refer to the [PHP documentation](https://www.php.net/manual/en/datetime.format.php).

## License

This project is licensed under the [MIT License](LICENSE).
