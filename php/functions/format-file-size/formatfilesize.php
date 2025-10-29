<?php
declare(strict_types=1);

/**
 * Format a byte count into a human-readable file size (e.g., 1.23 MB).
 *
 * Deutsch: Formatiert eine Byte-Anzahl als menschenlesbare Größe (z. B. 1,23 MB).
 *
 * @param int|float $bytes Anzahl der Bytes (>= 0)
 * @param int $precision Nachkommastellen
 * @param bool $nonBreakingSpace verwende geschütztes Leerzeichen zwischen Zahl und Einheit
 * @return string formatierter String oder 'n/a' bei 0 Bytes
 */
function format_file_size(int|float $bytes, int $precision = 2, bool $nonBreakingSpace = true): string {
    if ($bytes === 0) {
        return 'n/a';
    }

    $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];
    $bytes = max($bytes, 0);
    $pow = (int) floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);
    $value = $bytes / (1024 ** $pow);

    $space = $nonBreakingSpace ? "\u{00A0}" : ' ';
    return number_format($value, $precision, '.', '') . $space . $units[$pow];
}

// Example
$file_size = 1234567890;
echo format_file_size($file_size);
