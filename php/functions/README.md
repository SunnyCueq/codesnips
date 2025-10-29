# PHP Functions – Übersicht / Overview (DE/EN)

Deutsch:
- Zweck: Sammlung modernisierter PHP‑8.x‑Snippets mit strikten Typen, PHPDoc und Beispielen.
- Nutzung: Jede Funktion hat einen eigenen Ordner mit `index.php`/`*.php` und README (DE/EN) inkl. Signatur, Parametern, Rückgaben, Edge‑Cases und Beispielen.
- Ordner (Auszug):
  - `array2xml/` – Array → XML (escapes `ENT_XML1`)
  - `check-email/` – E‑Mail validieren (FILTER_VALIDATE_EMAIL)
  - `delete-file/` – Datei löschen (Exceptions)
  - `delete-folder-recursive/` – Ordner rekursiv löschen
  - `format-file-size/` – Bytes formatiert ausgeben
  - `format-url/` – URL normalisieren + escapen
  - `get-dir-size/` – Verzeichnisgröße berechnen
  - `mkdir-recursive/` – Verzeichnisse rekursiv anlegen
  - `randomname-or-id/` – Zufallsname/ID (kryptographisch)
  - `remove-line-breaks/` – Zeilenumbrüche normalisieren
  - `safe_htmlspecialchars/` – sicheres HTML‑Escaping
  - `truncate/` – Text kürzen (optional HTML‑aware)
  - `xml2array/` – XML → Array (SimpleXML → JSON)

Hinweise:
- Alle Beispiele erwarten UTF‑8.
- Fehlerfallverhalten ist pro Utility dokumentiert (Exceptions/Return).
- Ports in weiteren Sprachen findest du in `nodejs/`, `python/`, `go/`, `rust/`, `ruby/`, `lua/`, `autoit/`.

English:
- Purpose: Curated PHP‑8.x snippets with strict types, PHPDoc and examples.
- Usage: Each function has its own folder with `index.php`/`*.php` and a README (EN/DE) covering signature, params, returns, edge cases and examples.
- See the folders listed above. Ports in other languages live under `nodejs/`, `python/`, `go/`, `rust/`, `ruby/`, `lua/`, `autoit/`.
