; AutoIt3 script: random name
; Usage: random_name.exe <length> [lettersOnly] [uppercase]

If $CmdLine[0] = 0 Then
    ConsoleWrite("usage: random_name <length> [lettersOnly] [uppercase]" & @CRLF)
    Exit 1
EndIf

Local $length = Int($CmdLine[1])
Local $lettersOnly = False
Local $uppercase = False
If $CmdLine[0] >= 2 Then $lettersOnly = StringLower($CmdLine[2]) = "true"
If $CmdLine[0] >= 3 Then $uppercase = StringLower($CmdLine[3]) = "true"

If $length <= 0 Then
    ConsoleWrite("length must be positive" & @CRLF)
    Exit 1
EndIf

If Not $lettersOnly Then
    ; hex from pseudo-random bytes
    Local $bytes = Ceiling($length / 2)
    Local $buf = ""
    For $i = 1 To $bytes
        $buf &= Hex(Random(0, 255, 1), 2)
    Next
    ConsoleWrite(StringLeft($buf, $length) & @CRLF)
    Exit 0
EndIf

Local $alphabet = "abcdefghijklmnopqrstuvwxyz"
If $uppercase Then $alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"
Local $out = ""
For $i = 1 To $length
    Local $idx = Mod(Random(0, 1000000, 1), StringLen($alphabet)) + 1
    $out &= StringMid($alphabet, $idx, 1)
Next
ConsoleWrite($out & @CRLF)


