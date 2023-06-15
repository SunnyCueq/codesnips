<?php

$directory = "beispiel/";
$zipName = "beispiel.zip";

$files = array_slice(scandir($directory), 2);

$zip = new ZipArchive();

if ($zip->open($zipName, ZipArchive::CREATE | ZipArchive::OVERWRITE)) {
    foreach ($files as $file) {
        $zip->addFile($directory . $file, $file);
    }

    $zip->close();

    if (file_exists($zipName)) {
        $info = stat($zipName);
        echo '<p><a href="' . $zipName . '">' . $zipName . '</a> - ' .
            number_format(round($info["size"] / 1024, 1), 2, ",", ".") . ' KB</p>';
    }
}
