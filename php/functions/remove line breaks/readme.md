# removeLineBreak

Deutsch (ausführlich):
- Zweck: Normalisiert alle Zeilenumbrüche (`\r`, `\n`, `\r\n`, Unicode-Zeilenumbrüche) zu einem einheitlichen `\n` und entfernt führende/trailende Leerzeichen.
- Signatur: `removeLineBreak(string $text): string`
- Verhalten:
  - Mehrere aufeinanderfolgende Umbrüche werden zu einem einzelnen `\n` zusammengefasst.
  - Anfangs-/End-Whitespace wird durch `trim()` entfernt.
- Beispiele:
```php
echo removeLineBreak("Hallo\r\n\r\nWelt"); // "Hallo\nWelt"
```

English (detailed):
- Purpose: Normalize all line breaks to a single `\n` and trim surrounding whitespace.
- Signature: `removeLineBreak(string $text): string`
- Behavior & examples mirror the German section.
