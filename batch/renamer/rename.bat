@echo off

for /r "%cd%" %%g in (*.txt) do ren "%%g" "%%~ng.php"

pause
exit
