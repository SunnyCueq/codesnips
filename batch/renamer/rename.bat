@echo off
setlocal
set "folder=%cd%"

echo Achtung! Alle .txt-Dateien in %folder% (und allen Unterordnern) werden in .php umbenannt.
echo Drücken Sie eine beliebige Taste, um fortzufahren, oder schließen Sie dieses Fenster, um abzubrechen.
pause >nul

for /r "%folder%" %%g in (*.txt) do ren "%%g" "%%~ng.php"

echo Umbenennen abgeschlossen! Drücken Sie eine beliebige Taste, um dieses Fenster zu schließen.
pause >nul
endlocal
exit
