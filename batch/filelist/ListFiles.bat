@echo off
setlocal EnableDelayedExpansion

REM Set the default directory to the current directory
set "dir=%~dp0"

REM Prompt the user for a directory
set /p "dir=Enter directory (leave blank for current directory): "

REM If no directory was entered, use the current directory
if "%dir%"=="" set "dir=%~dp0"

REM Set the default file extension to all files
set "ext=*"

REM Prompt the user for a file extension
set /p "ext=Enter file extension (leave blank for all files): "

REM If no file extension was entered, use all files
if "%ext%"=="" set "ext=*"

REM Count all files and get their extensions
set "count=0"
for /R "%dir%" %%G in (*.%ext%) do (
  set /a "count+=1"
  echo %%~xG >> "%dir%\extensions.txt"
)

REM Remove duplicates from the list of file extensions
sort "%dir%\extensions.txt" /o "%dir%\extensions_sorted.txt"
del "%dir%\extensions.txt"
type nul > "%dir%\extensions_dedup.txt"
set "lastext="
for /F "usebackq delims=" %%H in ("%dir%\extensions_sorted.txt") do (
  if "%%H" neq "!lastext!" (
    echo %%H >> "%dir%\extensions_dedup.txt"
    set "lastext=%%H"
  )
)
del "%dir%\extensions_sorted.txt"

REM Go through each unique file extension
type nul > "%dir%\output.txt"
for /F "usebackq delims=" %%I in ("%dir%\extensions_dedup.txt") do (
  echo ============== >> "%dir%\output.txt"
  echo TYP: %%I >> "%dir%\output.txt"
  echo ============== >> "%dir%\output.txt"
  
  REM Go through each file in the directory and its subdirectories with the current file extension
  for /R "%dir%" %%J in (*%%I) do (
    set "fullpath=%%J"
    set "relative=!fullpath:%dir%=!"
    echo !relative:~1! >> "%dir%\output.txt"
  )
  
  REM Go through each subdirectory and its subdirectories with the current file extension
  for /R "%dir%" %%J in (.) do (
    for %%K in ("%%J\*%%I") do (
      set "fullpath=%%K"
      set "relative=!fullpath:%dir%=!"
      echo !relative:~1! >> "%dir%\output.txt"
    )
  )
  
  echo. >> "%dir%\output.txt"
)
del "%dir%\extensions_dedup.txt"

echo ======================== >> "%dir%\output.txt"
echo Done! >> "%dir%\output.txt"
pause

goto :eof

