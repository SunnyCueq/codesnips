<?php
$captcha = $_POST['g-recaptcha-response'] ?? '';
$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = [
    'secret' => 'XXXXXXXXXXX',
    'response' => $captcha,
];
$options = [
    'http' => [
        'method' => 'POST',
        'content' => http_build_query($data),
    ],
];
$context = stream_context_create($options);
$verify = file_get_contents($url, false, $context);
$captcha_success = json_decode($verify);

if (!$captcha_success->success) {
    $smsg .= ($smsg !== '') ? '<br />' : '';
    $smsg .= $lang['captcha_required'];
    $error = 1;
} else {
    $smsg .= '';
}
?>
