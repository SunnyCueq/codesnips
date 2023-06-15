<?php

function githubGist($code, $title, $hash)
{
    $data = json_encode([
        'description' => $title,
        'public'      => 'false',
        'files'       => [
            '' . $hash . '.txt' => ['content' => $code],
        ],
    ]);
    $url = "https://api.github.com/gists";
    $ch  = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER,
        ['User-Agent: php-curl']
    );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    if(curl_errno($ch)){
        throw new Exception('cURL error: ' . curl_error($ch));
    }
    curl_close($ch);
    $gist = json_decode($result, true);
    $gistslink = $gist ? $gist['html_url'] : null;
    return $gistslink;
}

echo githubGist('Test code', 'Test title', 'Test hash');
