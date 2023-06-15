<?php

function check_email($email)
{
    $pattern = '/^[-!#$%&\'*+\/0-9=?A-Z^_`{|}~]+@([-0-9A-Z]+\.)+[0-9A-Z]{2,}$/i';

    return preg_match($pattern, $email) === 1;
}

$email = 'example@example.com';

if (check_email($email)) {
    echo "Die E-Mail-Adresse ist gültig.";
} else {
    echo "Die E-Mail-Adresse ist ungültig.";
}
