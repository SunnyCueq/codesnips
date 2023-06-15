<?php

function format_date($format, $timestamp)
{
    $timezone_offset = defined("TIME_OFFSET") ? TIME_OFFSET : 0;

    $dateTime = new DateTime();
    $dateTime->setTimestamp($timestamp);
    $dateTime->modify("$timezone_offset hours");

    return $dateTime->format($format);
}

$format = 'Y-m-d H:i:s';
$timestamp = time(); // Aktueller Zeitstempel

$formattedDate = format_date($format, $timestamp);

echo "Formatiertes Datum: " . $formattedDate;
