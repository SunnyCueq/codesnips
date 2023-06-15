<?php

function format_file_size($bytes, $precision = 2) 
{ 
    $units = array('B', 'KB', 'MB', 'GB', 'TB'); 

    $bytes = max($bytes, 0); 
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
    $pow = min($pow, count($units) - 1); 

    $bytes /= pow(1024, $pow); 

    return round($bytes, $precision) . ' ' . $units[$pow]; 
} 

function get_remote_file_size($url) 
{ 
    $headers = get_headers($url, true);

    if (isset($headers['Content-Length'])) {
        return format_file_size($headers['Content-Length']);
    } else {
        return 'n/a';
    }
} 

$url = 'http://example.com/somefile.jpg';
echo get_remote_file_size($url);
