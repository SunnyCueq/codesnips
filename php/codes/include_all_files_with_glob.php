<?php
foreach (glob("files/*.php") as $filename)
{
    if(is_file($filename) && is_readable($filename)) {
        include $filename;
    } else {
        error_log("Die Datei $filename konnte nicht eingebunden werden.");
    }
}
?>
