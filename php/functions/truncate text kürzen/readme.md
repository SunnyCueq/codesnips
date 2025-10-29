# truncate

Deutsch (ausführlich):
- Zweck: Kürzt einen Text auf eine maximale Länge. Optional wortgenau (d. h. ohne Wörter hart zu schneiden) und mit definierbarem Abschluss (Standard `...`). Unterstützt optional HTML-Inhalte (Wortzählung auf Plaintext-Basis) und belässt Tags, schließt jedoch bewusst keine offenen Tags automatisch.
- Signatur: `truncate(string $text, int $length = 100, string $ending = '...', bool $exact = false, bool $considerHtml = false): string`
- Parameter:
  - `$text`: Eingabetext. Bei `$considerHtml=true` kann HTML enthalten sein; die sichtbare Textlänge wird berechnet, Tags werden ungezählt angefügt.
  - `$length`: Maximale Länge der sichtbaren Ausgabe (inkl. `$ending`).
  - `$ending`: Suffix bei Kürzung, z. B. `...` oder `…`.
  - `$exact`: `true` = harte Kürzung auf exakt `$length - strlen($ending)` Zeichen; `false` = versucht am letzten Leerzeichen abzuschneiden.
  - `$considerHtml`: `true` = HTML-Tags werden nicht mitgezählt, Text wird anhand des Plaintexts gekürzt; `false` = Zeichenweise Kürzung.
- Verhalten und Hinweise:
  - Wenn der Text bereits kürzer/gleich `$length` ist, wird er unverändert zurückgegeben.
  - Bei `$exact=false` wird, wenn möglich, am letzten Leerzeichen vor der Grenze abgeschnitten.
  - `$considerHtml=true` zählt HTML-Entitäten als ein Zeichen und ignoriert Tag-Länge. Es werden keine offenen Tags automatisch geschlossen.
  - Encoding: erwartet UTF-8. Für Multibyte-sichere Kürzung kann `mb_*`-Funktionen in einer Variante verwendet werden.
- Edge Cases:
  - Sehr kleine `$length`-Werte (z. B. `< strlen($ending)`) führen zu kurzer oder leerer Ausgabe mit nur `ending`.
  - Texte ohne Leerzeichen bei `$exact=false` werden wie `exact=true` behandelt.
  - HTML mit komplexen Entitäten/verschachtelten Tags wird unterstützt, sofern gültig.
- Beispiele:
```php
// Basis: harte Kürzung
echo truncate('Dies ist ein langer Text', 10); // "Dies ist..."

// Wortgenau (kein Wort mitten drin trennen)
echo truncate('Dies ist ein langer Text', 10, '...', false); // "Dies ist..."

// Eigener Abschluss
echo truncate('Hallo Welt', 7, '…'); // "Hallo …"

// HTML berücksichtigen (Tags bleiben erhalten, sichtbarer Text zählt)
$html = '<strong>Sehr</strong> langer <em>HTML</em>-Text';
echo truncate($html, 12, '...', false, true);
```

English (detailed):
- Purpose: Truncates text to a maximum length. Optional word-safe truncation and configurable ending (defaults to `...`). Can optionally consider HTML content (measures visible text length) while leaving tags intact; it does not auto-close tags.
- Signature: `truncate(string $text, int $length = 100, string $ending = '...', bool $exact = false, bool $considerHtml = false): string`
- Parameters:
  - `$text`: Input text. If `$considerHtml=true`, may contain HTML; visible text is measured, tags are appended uncounted.
  - `$length`: Max output length (including `$ending`).
  - `$ending`: Suffix when truncated, e.g., `...` or `…`.
  - `$exact`: `true` = hard truncation; `false` = try to cut at last whitespace.
  - `$considerHtml`: `true` = count plain text only, leave tags as-is; `false` = raw character truncation.
- Behavior & Notes:
  - Returns original text if already `<= $length`.
  - With `$exact=false`, attempts to cut at last whitespace before the boundary.
  - With `$considerHtml=true`, entities count as one char; no auto-closing of tags.
  - Encoding: expects UTF-8; consider `mb_*` for fully multibyte-safe variants.
- Edge cases and examples mirror the German section above.
