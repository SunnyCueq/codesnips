# Python Utils – Doku / Docs (DE/EN)

Deutsch:
- Funktionen:
  - `truncate(text, length=100, ending='...', exact=False)`: Text kürzen, optional wortgenau.
  - `safe_html(text)`: Sicherer HTML-Output (freie `&` zuerst), `html.escape`.
  - `remove_line_break(text)`: Zeilenumbrüche zu `\n` normalisieren und trimmen.
  - `format_url(url, default_scheme='https')`: URL normalisieren, Schema ergänzen.
- Beispiele:
```python
from utils.text import truncate, safe_html, remove_line_break, format_url
print(truncate('Dies ist ein langer Text', 10))
print(safe_html('<a href="/?q=a&b">Link</a>'))
print(remove_line_break('Hallo\r\n\r\nWelt'))
print(format_url('example.com'))
```

English:
- Functions:
  - `truncate(text, length=100, ending='...', exact=False)`
  - `safe_html(text)`
  - `remove_line_break(text)`
  - `format_url(url, default_scheme='https')`
- See docstrings in code for detailed signatures and behavior.
