# XML in Array konvertieren

Dieses PHP-Skript zeigt, wie XML-Daten in ein assoziatives Array konvertiert werden können. Es enthält eine Funktion `xml_to_array()`, die XML-Daten als Eingabe akzeptiert und ein Array mit den entsprechenden Werten zurückgibt.

## Verwendung

1. Geben Sie den XML-Code als Zeichenkette an, indem Sie ihn in den heredoc-String `$xml` einfügen.
2. Rufen Sie die Funktion `xml_to_array()` mit dem XML-Code als Parameter auf.
3. Die Funktion `xml_to_array()` analysiert das XML und gibt entweder das vollständige Array oder einen bestimmten Wert zurück, wenn der optionale Parameter `$main_heading` angegeben ist.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.

----

# Convert XML to Array

This PHP script demonstrates how to convert XML data to an associative array. It includes a function `xml_to_array()` that accepts XML data as input and returns an array with the corresponding values.

## Usage

1. Provide the XML code as a string by inserting it into the heredoc string `$xml`.
2. Call the `xml_to_array()` function with the XML code as the parameter.
3. The `xml_to_array()` function parses the XML and returns either the full array or a specific value if the optional `$main_heading` parameter is specified.

## License

This project is licensed under the [MIT License](LICENSE).
