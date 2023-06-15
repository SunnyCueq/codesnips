<?php

function imGUR($tmp) 
{ 
    global $script_link, $random, $imgur_api; 

    $image = file_get_contents($tmp); 
    $ch = curl_init(); 

    curl_setopt($ch, CURLOPT_URL, 'https://api.imgur.com/3/image.json'); 
    curl_setopt($ch, CURLOPT_POST, TRUE); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array( 
        "Authorization: Client-ID $imgur_api" 
    )); 

    curl_setopt($ch, CURLOPT_POSTFIELDS, array( 
        'image' => base64_encode($image) 
    )); 

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
    $reply = curl_exec($ch); 

    if(curl_error($ch)){
        return 'Curl Error: ' . curl_error($ch);
    }

    curl_close($ch); 
    $reply = json_decode($reply); 

    if (json_last_error() !== JSON_ERROR_NONE) {
        return 'JSON Error: ' . json_last_error_msg();
    }

    if (!isset($reply->data->link)) {
        return 'API Error: Missing data->link in the response';
    }

    $cover_out = $reply->data->link; 

    return $cover_out; 
}

$imgur_api = "IhrAPIKey"; // Setzen Sie hier Ihren imgur-API-Key ein
$script_link = "IhrSkriptLink"; // Setzen Sie hier Ihren Skript-Link ein
$random = "IhreZufallszahl"; // Setzen Sie hier Ihre Zufallszahl ein

$imagePath = "PfadZuIhremBild"; // Setzen Sie hier den Pfad zu Ihrem Bild ein

$result = imGUR($imagePath);

echo $result; // Gibt den Link zum hochgeladenen Bild oder eine Fehlermeldung aus
