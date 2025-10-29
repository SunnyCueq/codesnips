package main

import (
    "fmt"
    "math"
    "os"
    "strconv"
)

func formatFileSize(bytes float64, precision int, nbsp bool) string {
    if bytes == 0 {
        return "n/a"
    }
    units := []string{"B", "KB", "MB", "GB", "TB", "PB"}
    pow := int(math.Floor(math.Log(bytes) / math.Log(1024)))
    if pow > len(units)-1 {
        pow = len(units) - 1
    }
    value := bytes / math.Pow(1024, float64(pow))
    space := " "
    if nbsp {
        space = "\u00A0"
    }
    format := fmt.Sprintf("%%.%df", precision)
    return fmt.Sprintf(format+"%s%s", value, space, units[pow])
}

func main() {
    if len(os.Args) < 2 {
        fmt.Println("usage: format_file_size <bytes> [precision]")
        os.Exit(1)
    }
    b, _ := strconv.ParseFloat(os.Args[1], 64)
    p := 2
    if len(os.Args) > 2 {
        if pp, err := strconv.Atoi(os.Args[2]); err == nil {
            p = pp
        }
    }
    fmt.Println(formatFileSize(b, p, true))
}


