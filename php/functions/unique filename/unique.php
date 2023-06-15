<?php

function create_unique_filename($base, $file)
{
    $file_parts = pathinfo($file);
    $ext = isset($file_parts['extension']) ? $file_parts['extension'] : '';
    $name = isset($file_parts['filename']) ? $file_parts['filename'] : '';

    if(!file_exists($base . '/' . $file)) {
        return $file;
    }

    $n = 2;
    while(file_exists($base . '/' . $name . '_' . $n . '.' . $ext)) {
        $n++;
    }
    return $name . '_' . $n . '.' . $ext;
}

$base = '/pfad/zum/verzeichnis';
$file = 'test.txt';

$unique_filename = create_unique_filename($base, $file);
echo "Eindeutiger Dateiname: " . $unique_filename;
