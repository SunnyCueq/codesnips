param(
    [ValidateSet('Ethernet','Wi-Fi')]
    [string]$Target = 'Wi-Fi'
)

function Set-InterfaceState {
    param(
        [string]$Name,
        [bool]$Enable
    )
    $desired = if ($Enable) { 'Enabled' } else { 'Disabled' }
    $current = (Get-NetAdapter -Name $Name -ErrorAction SilentlyContinue)
    if (-not $current) { Write-Error "Interface '$Name' not found."; return }
    if ($Enable) { Enable-NetAdapter -Name $Name -Confirm:$false | Out-Null }
    else { Disable-NetAdapter -Name $Name -Confirm:$false | Out-Null }
}

if ($Target -eq 'Wi-Fi') {
    Set-InterfaceState -Name 'Wi-Fi' -Enable $true
    Set-InterfaceState -Name 'Ethernet' -Enable $false
} else {
    Set-InterfaceState -Name 'Ethernet' -Enable $true
    Set-InterfaceState -Name 'Wi-Fi' -Enable $false
}

Write-Host "Switched to $Target"


