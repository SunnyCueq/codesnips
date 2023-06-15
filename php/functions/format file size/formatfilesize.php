<?php

function format_file_size($bytes, $precision = 2) { 
    if ($bytes == 0) {
        return "n/a"; 
    }

    $units = array('B', 'KB', 'MB', 'GB', 'TB'); 
    $bytes = max($bytes, 0); 
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
    $pow = min($pow, count($units) - 1); 
    $bytes /= (1 << (10 * $pow)); 

    return round($bytes, $precision) . '&nbsp;' . $units[$pow]; 
}

$file_size = 1234567890;
echo format_file_size($file_size);
