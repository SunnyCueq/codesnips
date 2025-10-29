from __future__ import annotations

import html
import re
from urllib.parse import urlparse, urlunparse


def truncate(text: str, length: int = 100, ending: str = '...', exact: bool = False) -> str:
    """Truncate text to a maximum length.

    Deutsch: Kürzt Text auf maximale Länge. Bei exact=False wird, wenn möglich,
    am letzten Leerzeichen geschnitten.

    Args:
        text: Eingabetext
        length: Maximale Länge
        ending: Suffix (Standard ...)
        exact: Wenn False, versuche am letzten Leerzeichen zu schneiden
    Returns:
        Gekürzter Text
    """
    if len(text) <= length:
        return text
    cut = text[: max(0, length - len(ending))]
    if not exact:
        space = cut.rfind(' ')
        if space > 0:
            cut = cut[:space]
    return cut + ending


def safe_html(text: str) -> str:
    """Encode text for safe HTML output.

    Deutsch: Kodiert Text für sicheren HTML-Output. Zuerst freie & zu &amp;,
    dann html.escape.
    """
    # First ensure lone & are encoded
    text = re.sub(r'&(?!([#][0-9]+|[a-z]+);)', '&amp;', text, flags=re.I)
    return html.escape(text, quote=True)


def remove_line_break(text: str) -> str:
    """Normalize line breaks to \n and trim whitespace.

    Deutsch: Normalisiert Zeilenumbrüche zu \n und trimmt.
    """
    return re.sub(r'\R+', '\n', text).strip()


def format_url(url: str, default_scheme: str = 'https') -> str:
    """Normalize and return URL with scheme. Returns empty string if invalid.

    Deutsch: Normalisiert und liefert URL mit Schema; bei Ungültigkeit leerer String.
    """
    if not url:
        return ''
    url = url.strip()
    if not re.match(r'^https?://', url, re.I):
        url = f'{default_scheme}://{url}'
    parts = urlparse(url)
    if not parts.netloc:
        return ''
    return urlunparse(parts)


