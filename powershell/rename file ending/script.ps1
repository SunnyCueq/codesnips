Get-ChildItem -Recurse -Filter "*.txt" -File | Rename-Item -NewName { $_.Name -replace ".txt", ".php" }
