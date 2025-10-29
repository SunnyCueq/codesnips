<?php
declare(strict_types=1);

/**
 * Normalize and escape a URL; add default scheme if missing.
 *
 * Deutsch: Normalisiert und escaped eine URL; fügt bei Bedarf ein Standardschema (z. B. https) hinzu.
 *
 * @param string $url Eingabe-URL (ohne oder mit Schema)
 * @param string $defaultScheme Standardschema (z. B. "https")
 * @return string Normalisierte und HTML-eskapierte URL, leer bei Ungültigkeit
 */
function format_url(string $url, string $defaultScheme = 'https'): string {
  if ($url === '') {
    return '';
  }
  $url = trim($url);
  if (!preg_match('~^https?://~i', $url)) {
    $url = $defaultScheme . '://' . $url;
  }
  // Basic normalization
  $url = filter_var($url, FILTER_SANITIZE_URL) ?: '';
  return htmlspecialchars($url, ENT_QUOTES | ENT_HTML5 | ENT_SUBSTITUTE, 'UTF-8');
}