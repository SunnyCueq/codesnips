@echo off

echo Welche Schnittstelle möchtest du aktivieren oder deaktivieren?
echo 1. Ethernet
echo 2. Wi-Fi
set /p selection=Deine Auswahl: 

if "%selection%"=="1" (
    netsh interface set interface "Ethernet" enable
    netsh interface set interface "Wi-Fi" disable
) else if "%selection%"=="2" (
    netsh interface set interface "Ethernet" disable
    netsh interface set interface "Wi-Fi" enable
) else (
    echo Ungültige Auswahl.
)

pause
