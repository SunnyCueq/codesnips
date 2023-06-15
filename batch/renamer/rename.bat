@echo off
setlocal enabledelayedexpansion

echo Geben Sie den Pfad zum Verzeichnis ein, in dem sich die Dateien befinden:
set /p "sourceFolder="

echo Geben Sie die Quell-Dateiendung ein, die umbenannt werden soll:
set /p "sourceExtension="

echo Geben Sie die Ziel-Dateiendung ein, in die umbenannt werden soll:
set /p "targetExtension="

echo Achtung! Alle Dateien mit der Endung %sourceExtension% im Verzeichnis %sourceFolder% (und allen Unterordnern) werden in die Endung %targetExtension% umbenannt.
echo Drücken Sie eine beliebige Taste, um fortzufahren, oder schließen Sie dieses Fenster, um abzubrechen.
pause >nul

pushd "!sourceFolder!"

set "logFile=%sourceFolder%\Umbenennungsprotokoll.txt"
echo. > "%logFile%"

for /r %%g in (*.%sourceExtension%) do (
    set "oldName=%%~nxg"
    set "newName=%%~ng.%targetExtension%"
    ren "%%g" "!newName!"
    echo !oldName! wurde in !newName! umbenannt. >> "%logFile%"
)

popd

echo Umbenennen abgeschlossen! Drücken Sie eine beliebige Taste, um dieses Fenster zu schließen.
pause >nul
endlocal
exit
