# safe_htmlspecialchars

Deutsch (ausführlich):
- Zweck: Sicherer HTML-Output. Zuerst werden nur freie `&` (keine Entitäten) in `&amp;` umgewandelt, danach erfolgt das Escaping via `htmlspecialchars` mit `ENT_QUOTES|ENT_HTML5|ENT_SUBSTITUTE` (UTF-8).
- Signatur: `safe_htmlspecialchars(string $chars): string`
- Parameter & Rückgabe:
  - `$chars` (string): Eingabetext (UTF‑8)
  - Rückgabe (string): HTML-sicherer Text
- Verhalten und Sicherheit:
  - Verhindert XSS durch korrektes Escaping von `<`, `>`, `"`, `'`.
  - `ENT_SUBSTITUTE` ersetzt ungültige UTF‑8-Sequenzen durch das Ersatzzeichen, statt Fehler zu werfen.
  - Erwartet UTF‑8 Input.
- Edge Cases:
  - Bereits vorhandene Entitäten (z. B. `&amp;`, `&#xA0;`) bleiben erhalten.
  - Ungültige UTF‑8-Bytes werden ersetzt.
- Beispiele:
```php
echo safe_htmlspecialchars('<a href="/?q=a&b">Link</a>');
// Ausgabe: &lt;a href=&quot;/?q=a&amp;b&quot;&gt;Link&lt;/a&gt;
```

English (detailed):
- Purpose: Safe HTML output. First converts only lone `&` to `&amp;`, then applies `htmlspecialchars` with `ENT_QUOTES|ENT_HTML5|ENT_SUBSTITUTE` (UTF‑8).
- Signature: `safe_htmlspecialchars(string $chars): string`
- Parameters and return mirror the German section.
- Behavior & Security:
  - Prevents XSS by escaping `<`, `>`, `"`, `'`.
  - `ENT_SUBSTITUTE` replaces invalid UTF‑8 sequences.
  - Expects UTF‑8 input.
- Edge cases and examples mirror the German section.
