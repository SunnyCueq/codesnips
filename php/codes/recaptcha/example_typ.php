<?php
$captcha = $_POST['g-recaptcha-response'] ?? '';
$secretKey = 'XXXXXXXXXXX';
$url = 'https://www.google.com/recaptcha/api/siteverify';

$data = http_build_query([
    'secret' => $secretKey,
    'response' => $captcha,
]);

$options = [
    'http' => [
        'method' => 'POST',
        'header' => 'Content-Type: application/x-www-form-urlencoded',
        'content' => $data,
    ],
];

$context = stream_context_create($options);
$verify = file_get_contents($url, false, $context);
$response = json_decode($verify);

if (!$response->success) {
    $smsg = $lang['captcha_required'];
    $error = 1;
} else {
    $smsg = '';
}
?>
