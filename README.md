# Codeschnipsel für Webdesign & Webdevelopment

Willkommen zu meiner Sammlung von Codeschnipseln für Webdesign und Webdevelopment! Hier versuche ich, einige nützliche und persönliche Code-Schnipsel, Tricks und Kniffe zu sammeln, die im Bereich der Webprogrammierung verwendet werden können.

## Inhaltsverzeichnis
- [Über](#über)
- [Ordnerstruktur](#ordnerstruktur)
- [Beitragen](#beitragen)
- [Kontakt](#kontakt)

## Über

Die hier zur Verfügung gestellten Schnipsel sind Sammlungen von Codes, die ich persönlich für verschiedene Projekte benötigt habe. Sie können für Ihre eigenen Webprojekte sehr nützlich sein, und ich hoffe, dass sie für Sie einen zusätzlichen Nutzwert bieten. 

Ich konzentriere mich nicht auf eine bestimmte Programmiersprache, daher finden Sie hier Skripte aus verschiedenen Programmierbereichen.

## Ordnerstruktur

Kurzüberblick: Modernisierte, mehrsprachige Utility- und Script-Sammlung. Viele Snippets sind parallel in PHP (8.x), JavaScript/Node, Python, Bash, PowerShell sowie exotischeren Sprachen (Go, Rust, Ruby, Lua, AutoIt) verfügbar. Jede Funktion wird in ihrem Ordner zweisprachig (DE/EN) detailliert erklärt: Zweck, Signatur, Parameter, Rückgaben, Edge-Cases, Sicherheit, Beispiele.

### Support-Matrix (Auszug)

| Kategorie | PHP | Node.js | Python | Bash | PowerShell | Go | Rust | Ruby | Lua | AutoIt |
|---|---|---|---|---|---|---|---|---|---|---|
| Dateigröße formatieren | ✓ | ✓ | ✓ | ✓ | – | ✓ | ✓ | ✓ | ✓ | ✓ |
| Zufallsname/ID | ✓ | ✓ | ✓ | ✓ | – | ✓ | ✓ | ✓ | ✓ | ✓ |
| WLAN/Interface Switch | – | – | – | ✓ (nmcli) | ✓ | – | – | – | – | – |
| JDownloader Check (lokal) | – | Browser/HTML | – | – | – | – | – | – | – | – |

Hinweise:
- AutoIt und Lua-Varianten sind best-effort; Zufallswerte sind dort standardmäßig nicht kryptographisch stark (für starke Zufallswerte bevorzugt Node/Python/Go/Rust/PHP).
- Für Rust-Beispiele ist ein Cargo-Projekt empfohlen; die Snippets liegen als minimal lauffähige Beispiele vor.

### Nutzung & Beispiele

- PHP (8.x)
  - Utilities liegen unter `php/functions/...` mit Beispielen am Dateiende und in der README des jeweiligen Ordners.
  - Beispiel: Dateigröße
    ```php
    echo format_file_size(1234567890); // 1.15 GB
    ```
- Node.js
  - CLI: `node nodejs/cli/random-and-size.mjs --help`
  - Utils: `nodejs/utils/*`
  - Beispiel:
    ```bash
    node nodejs/cli/random-and-size.mjs format-file-size 123456789 -p 2
    ```
- Python
  - CLI (Typer): `python python/cli/main_typer.py --help`
  - Utils: `python/utils/*`
  - Beispiel:
    ```bash
    python python/cli/main_typer.py random-name 12 --letters-only --uppercase
    ```
- Go
  - CLI (Cobra-Beispiel): `cd go/cli && go run . format-file-size 123456`
  - Utils: `go/utils/*`
- Rust
  - CLI (Clap): `cd rust/cli && cargo run -- --help`
  - Utils: `rust/utils/*`
- Bash/PowerShell
  - WLAN Switch: `bash/wlan_nmcli.sh wifi` bzw. `powershell/wlan/switch-interface.ps1 -Target Wi-Fi`
- AutoIt
  - Build: siehe `autoit/README.md` (GUI/CLI mit Aut2Exe)

### Qualitäts- und Sicherheitsleitlinien

- PHP 8.x mit `declare(strict_types=1)`, Typdeklarationen, robuste Fehlerbehandlung.
- Sichere Zufälle (`random_bytes`, `random_int` bzw. kryptografische Generatoren in anderen Sprachen).
- Text/HTML: sichere Escapes (`ENT_HTML5|ENT_SUBSTITUTE`), URL-Sanitizing, Entitäten-Handling.
- Einheitliche UTF-8-Annahme, korrekte Pfadbehandlung, keine stillen Fehler.
- Linter/Formatter-Empfehlungen: PHPCS/PHP-CS-Fixer, ESLint/Prettier, Black/Ruff, PSScriptAnalyzer.

### Mehrsprachigkeit (DE/EN)

- Jede README erklärt Funktionen in Deutsch und Englisch mit identischen Inhalten, Beispielen und Edge-Cases.

Alle Skripte sind in Ober- und Unterordner unterteilt und jeweils beschrieben. Navigieren Sie durch die Verzeichnisse, um zu finden, was Sie brauchen.

## Beitragen

Ich würde mich sehr freuen, wenn Sie zu dieser Sammlung beitragen möchten. Sie können Ihre eigenen Codeschnipsel einsenden, oder Sie können die vorhandenen optimieren und ggf. erweitern. Ihr Beitrag ist sehr willkommen und wird sehr geschätzt!

## Kontakt

Für weitere Informationen und Anfragen, kontaktieren Sie mich gerne.

Beste Grüße,
Sunny

----

# Code Snippets for Web Design & Web Development

Welcome to my collection of code snippets for web design and web development! Here, I attempt to collect some useful and personal code snippets, tricks, and tips that can be used in the field of web programming.

## Table of Contents
- [About](#about)
- [Folder Structure](#folder-structure)
- [Contributing](#contributing)
- [Contact](#contact)

## About

The snippets provided here are collections of codes that I personally needed for various projects. They can be very useful for your own web projects, and I hope they provide additional value for you. 

I do not focus on a specific programming language, so you will find scripts from various programming areas here.

## Folder Structure

All scripts are divided into main and sub-folders, each described respectively. Navigate through the directories to find what you need.

## Contributing

I would be very happy if you would like to contribute to this collection. You can submit your own code snippets, or you can optimize and possibly extend the existing ones. Your contribution is very welcome and greatly appreciated!

## Contact

For further information and inquiries, feel free to contact me.

Best regards,
Sunny
