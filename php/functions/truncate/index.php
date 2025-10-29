<?php
declare(strict_types=1);

    // Funktion, um einen Text auf eine bestimmte Länge zu kürzen
    // Function to truncate a text to a certain length
    /**
     * Truncate a text to a maximum length.
     *
     * Deutsch: Kürzt einen Text auf maximale Länge. Optional wortgenau (kein Wort in der Mitte schneiden)
     * und mit definierbarem Abschluss (Standard '...'). Optional HTML berücksichtigen (sichtbarer Text zählt).
     *
     * @param string $text Eingabetext (UTF-8)
     * @param int $length Maximale Länge inklusive $ending
     * @param string $ending Suffix (z. B. ... oder …)
     * @param bool $exact true = harte Kürzung, false = versuche am letzten Leerzeichen zu schneiden
     * @param bool $considerHtml true = HTML-Tags ungezählt; sichtbarer Text kürzen
     * @return string Gekürzter Text
     */
    function truncate(string $text, int $length = 100, string $ending = '...', bool $exact = false, bool $considerHtml = false): string
    {
        // Wenn wir HTML berücksichtigen sollen
        // If we should consider HTML
        if ($considerHtml) {
            // Wenn der Klartext kürzer ist als die maximale Länge, gib den gesamten Text zurück
            // If the plain text is shorter than the maximum length, return the whole text
            if (strlen(preg_replace('/<.*?>/', '', $text)) <= $length) {
                return $text;
            }

            // Teilt alle HTML-Tags in scanbare Zeilen
            // Splits all HTML tags into scannable lines
            preg_match_all('/(<.+?>)?([^<>]*)/s', $text, $lines, PREG_SET_ORDER);

            $total_length = strlen($ending);
            $open_tags = array();
            $truncate = '';

            // Durchlaufe jede Linie
            // Go through each line
            foreach ($lines as $line_matchings) {
                // Wenn es in dieser Zeile einen HTML-Tag gibt, verarbeite ihn und füge ihn (ungezählt) zur Ausgabe hinzu
                // If there is any HTML tag in this line, handle it and add it (uncounted) to the output
                if (!empty($line_matchings[1])) {
                    // Wenn es ein "leeres Element" mit oder ohne xhtml-konformen Schließ-Slash ist (z.B.)
                    // If it’s an “empty element” with or without xhtml-conform closing slash (e.g.)
                    if (preg_match('/^<(\s*.+?\/\s*|\s*(img|br|input|hr|area|base|basefont|col|frame|isindex|link|meta|param)(\s.+?)?)>$/is', $line_matchings[1])) {
                        // do nothing
                        // if tag is a closing tag (e.g.)
                    } else if (preg_match('/^<\s*\/([^\s]+?)\s*>$/s', $line_matchings[1], $tag_matchings)) {
                        // Lösche den Tag aus der $open_tags Liste
                        // Delete tag from $open_tags list
                        $pos = array_search($tag_matchings[1], $open_tags);
                        if ($pos !== false) {
                            unset($open_tags[$pos]);
                        }
                        // Wenn der Tag ein Öffnungstag ist (z.B. )
                        // If the tag is an opening tag (e.g.)
                    } else if (preg_match('/^<\s*([^\s>!]+).*?>$/s', $line_matchings[1], $tag_matchings)) {
                        // Füge den Tag an den Anfang der $open_tags Liste hinzu
                        // Add tag to the beginning of $open_tags list
                        array_unshift($open_tags, strtolower($tag_matchings[1]));
                    }
                    // Füge HTML-Tag zu $truncate’d Text hinzu
                    // Add HTML tag to $truncate’d text
                    $truncate .= $line_matchings[1];
                }

                // Berechne die Länge des Klartextteils der Zeile; behandele Entitäten als ein Zeichen
                // Calculate the length of the plain text part of the line; handle entities as one character
                $content_length = strlen(preg_replace('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|&#x[0-9a-f]{1,6};/i', ' ', $line_matchings[2]));
                if ($total_length + $content_length > $length) {
                    // Die Anzahl der Zeichen, die noch übrig sind
                    // The number of characters that are left
                    $left = $length - $total_length;
                    $entities_length = 0;
                    // Suche nach HTML-Entitäten
                    // Search for HTML entities
                    if (preg_match_all('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|&#x[0-9a-f]{1,6};/i', $line_matchings[2], $entities, PREG_OFFSET_CAPTURE)) {
                        // Berechne die tatsächliche Länge aller Entitäten im legalen Bereich
                        // Calculate the real length of all entities in the legal range
                        foreach ($entities[0] as $entity) {
                            if ($entity[1] + 1 - $entities_length <= $left) {
                                $left--;
                                $entities_length += strlen($entity[0]);
                            } else {
                                // Keine Zeichen mehr übrig
                                // No more characters left
                                break;
                            }
                        }
                    }
                    $truncate .= substr($line_matchings[2], 0, $left + $entities_length);
                    // Maximale Länge erreicht, also steige aus der Schleife aus
                    // Maximum length is reached, so get off the loop
                    break;
                } else {
                    $truncate .= $line_matchings[2];
                    $total_length += $content_length;
                }

                // Wenn die maximale Länge erreicht ist, steige aus der Schleife aus
                // If the maximum length is reached, get off the loop
                if ($total_length >= $length) {
                    break;
                }
            }
        } else {
            if (strlen($text) <= $length) {
                return $text;
            } else {
                $truncate = substr($text, 0, $length - strlen($ending));
            }
        }

        // Wenn die Wörter nicht in der Mitte geschnitten werden sollen...
        // If the words shouldn't be cut in the middle...
        if (!$exact) {
            // ...suche das letzte Auftreten eines Leerzeichens...
            // ...search the last occurrence of a space...
            $spacepos = strrpos($truncate, ' ');
            if (isset($spacepos)) {
                // ...und schneide den Text an dieser Position ab
                // ...and cut the text in this position
                $truncate = substr($truncate, 0, $spacepos);
            }
        }

        // Füge das definierte Ende zum Text hinzu
        // Add the defined ending to the text
        $truncate .= $ending;

        if ($considerHtml) {
            // Schließe alle offenen HTML-Tags
            // Close all unclosed HTML tags
            foreach ($open_tags as $tag) {
                $truncate .= '';
            }
        }

        return $truncate;
    }
