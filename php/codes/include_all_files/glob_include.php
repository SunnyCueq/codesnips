<?php
$folder = "files"; // Standardordner

// Benutzerprompt für den Ordner
echo "Geben Sie den Ordnerpfad ein (lassen Sie ihn leer für den Standardordner 'files'): ";
$userFolder = trim(fgets(STDIN));

if (!empty($userFolder)) {
    $folder = $userFolder;
}

foreach (glob("$folder/*.php") as $filename)
{
    if(is_file($filename) && is_readable($filename)) {
        include $filename;
    } else {
        error_log("Die Datei $filename konnte nicht eingebunden werden.");
    }
}
?>
