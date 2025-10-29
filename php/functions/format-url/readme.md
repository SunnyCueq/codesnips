# format_url

Deutsch (ausführlich):
- Zweck: Normalisiert eine URL, fügt bei Bedarf ein Schema (Standard `https`) hinzu, sanitized die URL und escaped sie für HTML-Ausgabe.
- Signatur: `format_url(string $url, string $defaultScheme = 'https'): string`
- Parameter & Rückgabe:
  - `$url` (string): Eingabe-URL, optional ohne Schema
  - `$defaultScheme` (string): Standardschema (`https` empfohlen)
  - Rückgabe (string): HTML-eskapierte, sanitisierte URL; leerer String bei Ungültigkeit.
- Verhalten & Sicherheit:
  - Trimmen → Schema ergänzen → `FILTER_SANITIZE_URL` → `htmlspecialchars(ENT_QUOTES|HTML5|SUBSTITUTE)`.
  - Keine Vollvalidierung der URL-Struktur; dafür ggf. `filter_var(..., FILTER_VALIDATE_URL)` zusätzlich verwenden.
- Edge-Cases:
  - Eingabe nur Host vs. inkl. Pfad/Query/Fragment.
  - Nicht-HTTP(S)-Schemata sind möglich, werden aber standardmäßig auf `https` gesetzt, falls keines vorhanden.
- Beispiele:
```php
echo format_url('example.com'); // https://example.com
```

English (detailed):
- Purpose: Normalize URL, add scheme if missing, sanitize and escape for HTML output.
- Signature: `format_url(string $url, string $defaultScheme = 'https'): string`
- Parameters, behavior, security and edge cases mirror the German section.
```php
echo format_url('example.com'); // https://example.com
```
