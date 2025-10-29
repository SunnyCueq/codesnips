# array2xml

Deutsch (ausführlich):
- Zweck: Konvertiert ein assoziatives (verschachteltes) Array in einen XML-String mit Wurzel `<root/>`. Werte werden XML-konform mit `ENT_XML1` escapt.
- Signatur: `array2xml(array $array): string`
- Parameter & Rückgabe:
  - `$array` (array): Eingabedaten; Schlüssel werden als Tag-Namen verwendet.
  - Rückgabe (string): XML-String mit Wurzel `<root/>`.
- Verhalten & Details:
  - Rekursive Verarbeitung über `array2xmlRecursive` (Tiefen-first).
  - Nicht-String-Werte werden mit `(string)` konvertiert, anschließend XML-escaped.
  - Keys werden unverändert als Elementnamen genutzt; für nicht-valide XML-Namen ist ggf. eine Vorbehandlung nötig (siehe Hinweise).
- Sicherheit & Validierung:
  - Werte werden mit `ENT_XML1` escapt (verhindert ungültige Zeichen im Textknoten).
  - Kein Namespace-Handling; für Namespaces ist eine erweiterte Implementierung erforderlich.
- Performance:
  - Für sehr große Arrays kann die Rekursion tief werden; Iterationstiefe beachten.
- Edge-Cases:
  - Numerische Schlüssel führen zu Elementnamen wie `0`, `1`, ... (XML ist tolerant, aber nicht stilvoll) – ggf. Präfixe einführen.
  - Binärdaten: Vorher Base64-kodieren.
- Beispiel:
```php
$xml = array2xml(['a' => 1, 'b' => ['c' => 'x']]);
echo $xml;
```

- Tests (manuell):
  - Verschachtelte Arrays, leere Arrays, Sonderzeichen (`<`, `>`, `&`, `"`, `'`).
- Ports:
  - JS: `nodejs/utils/*` (siehe Text/Format-Utilities)
  - Python: `python/utils/*`

English (detailed):
- Purpose: Convert nested associative arrays into XML with root `<root/>`. Values are escaped with `ENT_XML1`.
- Signature: `array2xml(array $array): string`
- Parameters, behavior, edge cases and tests mirror the German section.
```php
$xml = array2xml(['a' => 1, 'b' => ['c' => 'x']]);
echo $xml;
```
