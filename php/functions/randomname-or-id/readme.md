# randomName

Deutsch (ausführlich):
- Zweck: Erzeugt einen zufälligen String. Standardmäßig Hex-String aus kryptografisch sicheren Bytes; bei `lettersOnly=true` werden Buchstaben genutzt (klein/auf Wunsch groß).
- Signatur: `randomName(int $length, bool $lettersOnly = false, bool $uppercase = false): string`
- Parameter & Rückgabe:
  - `$length` (int): Länge > 0
  - `$lettersOnly` (bool): Nur Buchstaben a–z bzw. A–Z
  - `$uppercase` (bool): Großbuchstaben (nur bei `lettersOnly=true`)
  - Rückgabe (string): Zufallsstring
- Sicherheit:
  - Nutzt `random_bytes`/`random_int` (kryptografisch sicher).
- Beispiele:
```php
echo randomName(12);             // 12-stelliger Hex-String
echo randomName(8, true);        // 8 Buchstaben, a–z
echo randomName(8, true, true);  // 8 Buchstaben, A–Z
```

English (detailed):
- Purpose: Generate a random string. Default is hex from cryptographically secure bytes; with `lettersOnly=true` it uses letters.
- Signature: `randomName(int $length, bool $lettersOnly = false, bool $uppercase = false): string`
- Parameters, security, and examples mirror the German section.
