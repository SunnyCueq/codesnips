<?php

// Funktion zum Formatieren eines Datums basierend auf einem bestimmten Format und Zeitstempel
// Function to format a date based on a specific format and timestamp
function format_date($format, $timestamp)
{
    // Ermitteln des Zeitversatzes, wenn die Konstante TIME_OFFSET definiert ist. Ansonsten ist der Versatz 0.
    // Determine the time offset if the constant TIME_OFFSET is defined. Otherwise, the offset is 0.
    $timezone_offset = defined("TIME_OFFSET") ? TIME_OFFSET : 0;

    // Erstellen eines neuen DateTime-Objekts
    // Create a new DateTime object
    $dateTime = new DateTime();
    // Einstellen des Zeitstempels für das DateTime-Objekt
    // Set the timestamp for the DateTime object
    $dateTime->setTimestamp($timestamp);
    // Modifizieren des DateTime-Objekts basierend auf dem Zeitversatz
    // Modify the DateTime object based on the time offset
    $dateTime->modify("$timezone_offset hours");

    // Rückgabe des formatierten Datums
    // Return the formatted date
    return $dateTime->format($format);
}

$format = 'Y-m-d H:i:s'; // Gewünschtes Datumsformat
$timestamp = time(); // Aktueller Zeitstempel

// Verwenden der Funktion format_date, um das Datum zu formatieren
// Use the format_date function to format the date
$formattedDate = format_date($format, $timestamp);

// Ausgabe des formatierten Datums
// Output the formatted date
echo "Formatiertes Datum: " . $formattedDate;
