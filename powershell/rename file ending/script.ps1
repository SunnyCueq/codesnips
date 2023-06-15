$sourceFolder = Read-Host "Geben Sie den Pfad zum Verzeichnis ein, in dem sich die Dateien befinden"

$sourceExtension = Read-Host "Geben Sie die Quell-Dateiendung ein, die umbenannt werden soll"
$targetExtension = Read-Host "Geben Sie die Ziel-Dateiendung ein, in die umbenannt werden soll"

$files = Get-ChildItem -Recurse -Filter "*.$sourceExtension" -File -Path $sourceFolder

foreach ($file in $files) {
    $newName = $file.Name -replace "$sourceExtension$", "$targetExtension"
    $newPath = Join-Path -Path $file.DirectoryName -ChildPath $newName
    Rename-Item -Path $file.FullName -NewName $newName -Force
    Write-Host "$($file.Name) wurde in $newName umbenannt"
}

Write-Host "Umbenennen abgeschlossen!"
