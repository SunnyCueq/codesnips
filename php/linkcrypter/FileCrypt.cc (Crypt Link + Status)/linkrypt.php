<?php

function xml_to_array($xml, $main_heading = '') 
{ 
    $deXml     = simplexml_load_string($xml); 
    $deJson    = json_encode($deXml); 
    $xml_array = json_decode($deJson, true); 
    if ($xml_array === null && json_last_error() !== JSON_ERROR_NONE) {
        return 'JSON decoding error: ' . json_last_error_msg();
    }
    if (!empty($main_heading)) { 
        $returned = $xml_array[$main_heading]; 
        return $returned; 
    } else { 
        return $xml_array; 
    } 
} 

function fileCrypt($downloadlinks, $filecrypt_api, $foldername) 
{ 
    $postdata = array( 
        'api_key'         => $filecrypt_api, 
        'fn'              => 'container', 
        'sub'             => 'create', 
        'fmt'             => 'xml', 
        'foldername'      => $foldername, 
        'captcha'         => '1', 
        'allow_container' => '1', 
        'allow_links'     => '1', 
        'mirror[]'        => $downloadlinks, 
    ); 
    $curl = curl_init(); 
    curl_setopt($curl, CURLOPT_URL, "https://filecrypt.cc/api.php"); 
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata); 
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); 
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0); 
    $filecrypt_links = curl_exec($curl); 
    if($filecrypt_links === false) {
        return 'Curl error: ' . curl_error($curl);
    }
    curl_close($curl); 
    $data_array = xml_to_array($filecrypt_links); 
    if(is_string($data_array)) {
        return $data_array; // Wenn xml_to_array einen Fehler zurückgibt
    }
    $fc_link    = $data_array['container']['link']; 
    $fc_simg    = $data_array['container']['bigimg'] . ".png"; 
    $fc_array   = array( 
        $fc_link, 
        $fc_simg 
    ); 
    return ($fc_array); 
}

$filecrypt_api = "IhrAPIKey"; // Setzen Sie hier Ihren Filecrypt-API-Schlüssel ein
$downloadlinks = "IhreDownloadLinks"; // Setzen Sie hier Ihre Download-Links ein
$foldername = "IhrOrdnername"; // Setzen Sie hier Ihren Ordnernamen ein

$result = fileCrypt($downloadlinks, $filecrypt_api, $foldername);

print_r($result); // Gibt das Array mit den Filecrypt-Links oder eine Fehlermeldung aus
