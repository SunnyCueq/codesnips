# create_unique_filename

Deutsch (ausführlich):
- Zweck: Erzeugt einen eindeutigen Dateinamen in einem Verzeichnis, falls der gewünschte Name bereits existiert (Suffix `_2`, `_3`, ... wird angehängt).
- Signatur: `create_unique_filename(string $baseDir, string $fileName): string`
- Parameter & Rückgabe:
  - `$baseDir` (string): Zielverzeichnis
  - `$fileName` (string): gewünschter Dateiname (z. B. `bild.jpg`)
  - Rückgabe (string): verfügbarer neuer Dateiname (z. B. `bild_2.jpg`)
- Verhalten & Details:
  - Prüft zuerst den gewünschten Namen; wenn frei, wird er unverändert zurückgegeben.
  - Ansonsten wird ein Zähler ab 2 erhöht, bis ein freier Name gefunden wurde.
- Edge-Cases:
  - Dateien ohne Erweiterung werden korrekt behandelt (`name_2`).
  - Vorhandene Suffixe stören nicht: es wird weiter hochgezählt.
- Beispiel:
```php
$unique = create_unique_filename('/var/www/uploads', 'bild.jpg');
echo $unique; // bild.jpg oder bild_2.jpg, bild_3.jpg, ...
```

English (detailed):
- Purpose: Generate a unique filename in a directory if the desired one exists by appending `_2`, `_3`, ...
- Signature: `create_unique_filename(string $baseDir, string $fileName): string`
- Parameters, behavior, edge cases and example mirror the German section.
