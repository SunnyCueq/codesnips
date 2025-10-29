param(
    [Parameter(Mandatory=$true)][string]$Path,
    [Parameter(Mandatory=$true)][string]$From,
    [Parameter(Mandatory=$true)][string]$To,
    [switch]$Recurse,
    [switch]$DryRun,
    [switch]$Force
)

$search = "*.${From}"
$items = Get-ChildItem -Path $Path -Filter $search -File -Recurse:$Recurse.IsPresent

foreach ($file in $items) {
    $newName = ($file.Name -replace [Regex]::Escape($From) + '$', $To)
    if ($newName -eq $file.Name) { continue }
    if ($DryRun) {
        Write-Host "DRY-RUN: $($file.FullName) -> $newName"
        continue
    }
    Rename-Item -LiteralPath $file.FullName -NewName $newName -Force:$Force.IsPresent
    Write-Host "$($file.Name) -> $newName"
}

Write-Host "Done."


