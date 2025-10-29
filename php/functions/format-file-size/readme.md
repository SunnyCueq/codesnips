# format_file_size

Deutsch (ausführlich):
- Zweck: Formatiert Bytes als menschenlesbaren String (z. B. `1.23 MB`).
- Signatur: `format_file_size(int|float $bytes, int $precision = 2, bool $nonBreakingSpace = true): string`
- Verhalten & Details:
  - Einheiten: `B, KB, MB, GB, TB, PB`.
  - `0` ergibt `n/a`.
  - Geschütztes Leerzeichen zwischen Zahl und Einheit optional.
- Edge-Cases:
  - Negative Eingaben sind ungültig.
  - Sehr große Werte werden bis PB skaliert.
- Beispiel:
```php
echo format_file_size(1234567890); // 1.15 GB
```

English (detailed):
- Purpose: Format a byte count into a human-readable string (e.g., `1.23 MB`).
- Signature: `format_file_size(int|float $bytes, int $precision = 2, bool $nonBreakingSpace = true): string`
- Behavior & edge cases mirror the German section.
