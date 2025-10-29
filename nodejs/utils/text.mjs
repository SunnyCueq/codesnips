/**
 * Truncate text to a maximum length. Optionally cut at last whitespace.
 * @param {string} text
 * @param {number} [length=100]
 * @param {string} [ending='...']
 * @param {boolean} [exact=false] If false, try cut at last space
 * @returns {string}
 */
export function truncate(text, length = 100, ending = '...', exact = false) {
  if (text.length <= length) return text;
  let cut = text.slice(0, length - ending.length);
  if (!exact) {
    const space = cut.lastIndexOf(' ');
    if (space > 0) cut = cut.slice(0, space);
  }
  return cut + ending;
}

/**
 * Encode text for safe HTML output (ampersands first, then basic characters).
 * @param {string} text
 * @returns {string}
 */
export function safeHtml(text) {
  return text
    .replace(/&(?!([#][0-9]+|[a-z]+);)/gi, '&amp;')
    .replace(/</g, '&lt;')
    .replace(/>/g, '&gt;')
    .replace(/"/g, '&quot;')
    .replace(/'/g, '&#39;');
}

/**
 * Normalize line breaks to \n and trim whitespace.
 * @param {string} text
 * @returns {string}
 */
export function removeLineBreak(text) {
  return text.replace(/\r?\n+/g, '\n').trim();
}

/**
 * Normalize a URL and ensure a scheme exists. Returns normalized string or empty if invalid.
 * @param {string} url
 * @param {string} [defaultScheme='https']
 * @returns {string}
 */
export function formatUrl(url, defaultScheme = 'https') {
  if (!url) return '';
  url = url.trim();
  if (!/^https?:\/\//i.test(url)) url = `${defaultScheme}://${url}`;
  try {
    const u = new URL(url);
    return u.toString();
  } catch {
    return '';
  }
}


