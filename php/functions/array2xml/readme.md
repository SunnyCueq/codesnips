# Konvertierung eines Arrays in XML mit PHP

Dieses PHP-Skript zeigt, wie man ein assoziatives Array in eine XML-Struktur konvertiert. Es enthält zwei Funktionen: `array2xml()` und `array2xmlRecursive()`, die rekursiv das Array durchlaufen und ein SimpleXMLElement-Objekt erstellen, das die XML-Daten repräsentiert.

## Verwendung

1. Verwenden Sie das `$array`, um Ihre Daten in einem assoziativen Array-Format zu definieren.
2. Rufen Sie die Funktion `array2xml()` auf und übergeben Sie das `$array` als Parameter.
3. Die Funktion erstellt ein SimpleXMLElement-Objekt mit dem Wurzelelement `<root/>`.
4. Das Array wird in umgekehrter Reihenfolge durchlaufen, um sicherzustellen, dass die Elemente in der richtigen Reihenfolge im XML erstellt werden.
5. Für jeden Schlüssel-Wert-Paar im Array wird überprüft, ob der Wert ein weiteres Array ist. In diesem Fall wird die Funktion `array2xmlRecursive()` aufgerufen, um das innere Array zu verarbeiten.
6. Wenn der Wert kein Array ist, wird das entsprechende XML-Element erstellt und dem SimpleXMLElement hinzugefügt.
7. Die Funktion `array2xml()` gibt die XML-Daten als Zeichenkette zurück.
8. Die XML-Daten können mit `echo` ausgegeben oder in eine Datei geschrieben werden.

Bitte beachten Sie, dass dieses Skript für einfache Array-Strukturen geeignet ist. Komplexere Arrays mit mehreren Ebenen oder verschachtelten Elementen erfordern möglicherweise eine Anpassung des Codes.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.
----
# Converting an Array to XML with PHP

This PHP script demonstrates how to convert an associative array into an XML structure. It includes two functions: `array2xml()` and `array2xmlRecursive()`, which recursively traverse the array and create a SimpleXMLElement object representing the XML data.

## Usage

1. Use the `$array` to define your data in an associative array format.
2. Call the `array2xml()` function and pass the `$array` as a parameter.
3. The function creates a SimpleXMLElement object with the root element `<root/>`.
4. The array is traversed in reverse order to ensure that the elements are created in the correct order in the XML.
5. For each key-value pair in the array, it checks if the value is another array. In that case, it calls the `array2xmlRecursive()` function to process the inner array.
6. If the value is not an array, it creates the corresponding XML element and adds it to the SimpleXMLElement.
7. The `array2xml()` function returns the XML data as a string.
8. The XML data can be echoed or written to a file.

Please note that this script is suitable for simple array structures. More complex arrays with multiple levels or nested elements may require modification of the code.

## License

This project is licensed under the [MIT License](LICENSE).
