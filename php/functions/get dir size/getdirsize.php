<?php

function get_dir_size($dir) {
    $size = 0;
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));

    foreach ($iterator as $file) {
        $size += $file->getSize();
    }

    return $size;
}

$dir = '/path/to/your/directory';
echo get_dir_size($dir);
