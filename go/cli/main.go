package main

import (
    "fmt"
    "github.com/spf13/cobra"
    "math"
)

func formatFileSize(bytes float64, precision int) string {
    if bytes == 0 { return "n/a" }
    units := []string{"B","KB","MB","GB","TB","PB"}
    pow := int(math.Floor(math.Log(bytes)/math.Log(1024)))
    if pow > len(units)-1 { pow = len(units)-1 }
    val := bytes / math.Pow(1024, float64(pow))
    return fmt.Sprintf("%.*f %s", precision, val, units[pow])
}

func main() {
    var root = &cobra.Command{Use: "codesnips", Short: "Utilities CLI"}

    var precision int
    var cmdSize = &cobra.Command{Use: "format-file-size <bytes>", Args: cobra.ExactArgs(1)}
    cmdSize.Flags().IntVarP(&precision, "precision", "p", 2, "precision")
    cmdSize.RunE = func(cmd *cobra.Command, args []string) error {
        var b float64
        fmt.Sscanf(args[0], "%f", &b)
        fmt.Println(formatFileSize(b, precision))
        return nil
    }

    root.AddCommand(cmdSize)
    _ = root.Execute()
}


