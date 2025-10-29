# Node.js Utils – Doku / Docs (DE/EN)

Deutsch:
- Funktionen:
  - `truncate(text, length=100, ending='...', exact=false)`: Text kürzen, optional wortgenau.
  - `safeHtml(text)`: Sicherer HTML-Output (freie `&` zuerst), escapet Standard-Zeichen.
  - `removeLineBreak(text)`: Zeilenumbrüche zu `\n` normalisieren und trimmen.
  - `formatUrl(url, defaultScheme='https')`: URL normalisieren, Schema ergänzen.
- Sicherheit: `safeHtml` schützt vor XSS (Basisklasse). Für komplexe HTML-Kontexte weitere Sanitizer nutzen.
- Beispiele:
```js
import { truncate, safeHtml, removeLineBreak, formatUrl } from './text.mjs';
console.log(truncate('Dies ist ein langer Text', 10));
console.log(safeHtml('<a href="/?q=a&b">Link</a>'));
console.log(removeLineBreak('Hallo\r\n\r\nWelt'));
console.log(formatUrl('example.com'));
```

English:
- Functions:
  - `truncate(text, length=100, ending='...', exact=false)`: Truncate text, optionally word-safe.
  - `safeHtml(text)`: Safe HTML (ampersands first), escapes standard characters.
  - `removeLineBreak(text)`: Normalize line breaks to `\n` and trim.
  - `formatUrl(url, defaultScheme='https')`: Normalize URL, add scheme.
- Security: `safeHtml` offers basic XSS protection; consider dedicated sanitizers for complex HTML.
- See code JSDoc for detailed signatures and notes.
