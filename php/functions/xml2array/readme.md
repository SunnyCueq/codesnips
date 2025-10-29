# xml_to_array

Deutsch (ausführlich):
- Zweck: Wandelt einen XML-String in ein assoziatives Array (via SimpleXML → JSON → Array) um, optional mit Extraktion eines Teilbaums (`$main_heading`).
- Signatur: `xml_to_array(string $xml, string $main_heading = ''): array`
- Parameter & Rückgabe:
  - `$xml` (string): XML-Input (UTF‑8 erwartet)
  - `$main_heading` (string): Optionaler Key zur Teilbaum-Extraktion
  - Rückgabe (array): Ergebnisstruktur
- Verhalten & Details:
  - Aktiviert internes libxml-Error-Handling; wirft `RuntimeException` bei ungültigem XML.
  - Nutzt `JSON_THROW_ON_ERROR` sowohl für Encoding als auch Decoding.
- Edge-Cases:
  - Mixed Content/Attribute werden gemäß SimpleXML→JSON-Mapping abgebildet (ggf. abweichend zur Erwartung, dokumentieren!).
  - Namespaces werden berücksichtigt, Keys können Namespaces enthalten.
- Tests (manuell):
  - Gültiges/ungültiges XML, Namespaces, leere Knoten, numerische Inhalte.
- Beispiel:
```php
print_r(xml_to_array('<root><a>1</a></root>'));
```

English (detailed):
- Purpose: Convert an XML string into an associative array (SimpleXML → JSON → array), optionally extracting a subtree via `$main_heading`.
- Signature: `xml_to_array(string $xml, string $main_heading = ''): array`
- Parameters, behavior, edge cases and tests mirror the German section.
- Example:
```php
print_r(xml_to_array('<root><a>1</a></root>'));
```
