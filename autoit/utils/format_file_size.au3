; AutoIt3 script: format file size
; Usage: format_file_size.exe <bytes> [precision]

If $CmdLine[0] = 0 Then
    ConsoleWrite("usage: format_file_size <bytes> [precision]" & @CRLF)
    Exit 1
EndIf

Local $bytes = Number($CmdLine[1])
Local $precision = 2
If $CmdLine[0] >= 2 Then $precision = Number($CmdLine[2])

If $bytes = 0 Then
    ConsoleWrite("n/a" & @CRLF)
    Exit 0
EndIf

Local $units[6] = ["B","KB","MB","GB","TB","PB"]
Local $pow = 0
Local $value = $bytes
While $value >= 1024 And $pow < UBound($units) - 1
    $value = $value / 1024
    $pow += 1
WEnd

Local $space = ChrW(0x00A0)
ConsoleWrite(StringFormat("%0." & $precision & "f", $value) & $space & $units[$pow] & @CRLF)


