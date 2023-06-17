# Deutsch:

# Funktion: Truncate

Die Funktion `truncate` dient zum Kürzen eines Textes auf eine bestimmte Länge. Sie hat fünf Parameter:

1. `$text`: Der Text, der gekürzt werden soll.
2. `$length`: Die maximale Länge des resultierenden Textes. Standardwert ist 100.
3. `$ending`: Das Zeichen oder die Zeichenkette, die ans Ende des gekürzten Textes angehängt wird. Standardwert ist '...'.
4. `$exact`: Ein boolescher Wert, der bestimmt, ob Worte in der Mitte geschnitten werden dürfen. Standardwert ist `false`.
5. `$considerHtml`: Ein boolescher Wert, der bestimmt, ob HTML-Tags berücksichtigt werden sollen. Standardwert ist `false`.

Falls `$considerHtml` auf `true` gesetzt ist, werden alle HTML-Tags im Text behandelt und korrekt geöffnet und geschlossen, um eine korrekte Darstellung zu gewährleisten. Auch HTML-Entities werden korrekt behandelt.

Falls `$exact` auf `false` gesetzt ist, wird der Text am letzten Leerzeichen vor dem `$ending` getrennt, um zu verhindern, dass Worte mitten drin abgeschnitten werden.

# English:

# Function: Truncate

The function `truncate` is used to truncate a text to a certain length. It has five parameters:

1. `$text`: The text to be truncated.
2. `$length`: The maximum length of the resulting text. Default value is 100.
3. `$ending`: The character or string that will be appended to the end of the truncated text. Default value is '...'.
4. `$exact`: A boolean value that determines if words may be cut in the middle. Default value is `false`.
5. `$considerHtml`: A boolean value that determines if HTML tags should be considered. Default value is `false`.

If `$considerHtml` is set to `true`, all HTML tags in the text are treated and correctly opened and closed to ensure proper rendering. It ensures HTML entities are handled correctly as well.

If `$exact` is set to `false`, the text is split at the last space before the `$ending`, to prevent words from being cut off in the middle.
