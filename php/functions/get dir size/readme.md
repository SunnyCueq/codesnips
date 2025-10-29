# get_dir_size

Deutsch (ausführlich):
- Zweck: Ermittelt die Gesamtgröße eines Verzeichnisses rekursiv in Bytes.
- Signatur: `get_dir_size(string $dir): int`
- Verhalten & Details:
  - Nutzt `RecursiveDirectoryIterator` und summiert `getSize()` von Dateien.
  - Überspringt `.` und `..` per `FilesystemIterator::SKIP_DOTS`.
- Edge-Cases:
  - Symlinks/Permissions: Zugriff kann fehlschlagen; in solchen Fällen Exceptions berücksichtigen.
  - Sehr große Verzeichnisse: Laufzeit kann entsprechend steigen.
- Beispiel:
```php
echo get_dir_size('/var/www');
```

English (detailed):
- Purpose: Recursively compute directory size in bytes.
- Signature: `get_dir_size(string $dir): int`
- Behavior & edge cases mirror the German section.
