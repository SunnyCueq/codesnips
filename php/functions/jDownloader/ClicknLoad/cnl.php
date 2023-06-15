<?php

function cnl($links) 
{ 
    if (!is_string($links)) {
        throw new Exception("Parameter must be a string");
    }

    $cnl_links = preg_replace('/\s\s+/', '/r/n', $links); 
    $cnl_links = urlencode($cnl_links); // URL-Encoding
    $cnl = "http://127.0.0.1:9666/flash/add?source=http://jdownloader.org/spielwiese&urls=" . $cnl_links; 
    
    return $cnl; 
} 

echo cnl("http://example.com/file1 http://example.com/file2");
