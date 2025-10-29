# JavaScript – Browser Snippets (DE/EN)

Deutsch:
- JDownloader Status (modern): `javascript/jdownloader_check_modern.html`
  - Prüft via `fetch('http://127.0.0.1:9666/', {method:'HEAD'})` mit Timeout, zeigt Status im DOM.
  - Hinweis: CORS/Policy kann je nach Browser/Setup greifen; Node/Python‑Alternativen sind im Repo.
- swap content: `javascript/swap content/index.html` (Beispiel für einfachen DOM‑Tausch)

English:
- JDownloader status (modern): `javascript/jdownloader_check_modern.html`
  - Uses HEAD request with timeout to detect local instance; renders status text.
  - Note: May be affected by CORS/policies; see Node/Python alternatives.
- swap content: simple DOM swapping example.
