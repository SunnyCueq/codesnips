<?php

// Funktion zur Überprüfung, ob eine E-Mail-Adresse gültig ist
// Function to check if an email address is valid
function check_email($email)
{
    // Überprüfung, ob die E-Mail-Adresse dem Filter entspricht (gültig ist) und Rückgabe des Ergebnisses
    // Checking if the email address matches the filter (is valid) and returning the result
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Beispiele-Mail-Adresse zum Überprüfen
// Example email address to check
$email = 'example@example.com';

// Überprüfen, ob die E-Mail-Adresse gültig ist und Ausgabe des Ergebnisses
// Checking if the email address is valid and printing the result
if (check_email($email)) {
    echo "Die E-Mail-Adresse ist gültig."; // "The email address is valid."
} else {
    echo "Die E-Mail-Adresse ist ungültig."; // "The email address is invalid."
}
