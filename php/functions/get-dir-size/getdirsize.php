<?php
declare(strict_types=1);

/**
 * Recursively calculate the size of a directory in bytes.
 *
 * Deutsch: Ermittelt die Gesamtgröße eines Verzeichnisses rekursiv in Bytes.
 *
 * @param string $dir Pfad zum Verzeichnis
 * @return int Größe in Bytes
 */
function get_dir_size(string $dir): int {
    $size = 0;
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dir, FilesystemIterator::SKIP_DOTS)
    );

    foreach ($iterator as $file) {
        if ($file->isFile()) {
            $size += $file->getSize();
        }
    }

    return $size;
}

// Example
$dir = '/path/to/your/directory';
echo get_dir_size($dir);
