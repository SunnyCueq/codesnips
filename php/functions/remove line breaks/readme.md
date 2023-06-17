# PHP Funktion: removeLineBreak

Diese Funktion in PHP hilft dabei, übermäßige Zeilenumbrüche aus einem gegebenen Textstring zu entfernen. 

## Beschreibung

Die `removeLineBreak` Funktion nimmt einen String als Eingabeparameter. Sie verwendet den regulären Ausdruck `/\R+/`, um alle Arten von Zeilenumbrüchen (\r, \n, \r\n) zu suchen und diese durch einen einzigen \n-Zeilenumbruch zu ersetzen. Schließlich wird die `trim` Funktion angewendet, um überflüssige Leerzeichen am Anfang und am Ende des Strings zu entfernen.

----

# PHP Function: removeLineBreak

This PHP function helps to remove excessive line breaks from a given text string.

## Description

The `removeLineBreak` function takes a string as an input parameter. It uses the regular expression `/\R+/` to find all types of line breaks (\r, \n, \r\n) and replaces them with a single \n line break. Finally, the `trim` function is applied to remove any superfluous whitespace at the start and end of the string.
