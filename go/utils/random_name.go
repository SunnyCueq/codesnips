package main

import (
    "crypto/rand"
    "encoding/hex"
    "fmt"
    "math/big"
    "os"
    "strconv"
)

func randomName(length int, lettersOnly bool, uppercase bool) (string, error) {
    if length <= 0 {
        return "", fmt.Errorf("length must be positive")
    }
    if !lettersOnly {
        buf := make([]byte, (length+1)/2)
        if _, err := rand.Read(buf); err != nil {
            return "", err
        }
        hexStr := hex.EncodeToString(buf)
        return hexStr[:length], nil
    }
    lower := "abcdefghijklmnopqrstuvwxyz"
    upper := "ABCDEFGHIJKLMNOPQRSTUVWXYZ"
    alphabet := lower
    if uppercase {
        alphabet = upper
    }
    out := make([]byte, length)
    for i := 0; i < length; i++ {
        n, err := rand.Int(rand.Reader, big.NewInt(int64(len(alphabet))))
        if err != nil {
            return "", err
        }
        out[i] = alphabet[n.Int64()]
    }
    return string(out), nil
}

func main() {
    if len(os.Args) < 2 {
        fmt.Println("usage: random_name <length> [lettersOnly] [uppercase]")
        os.Exit(1)
    }
    length, _ := strconv.Atoi(os.Args[1])
    lettersOnly := len(os.Args) > 2 && os.Args[2] == "true"
    uppercase := len(os.Args) > 3 && os.Args[3] == "true"
    s, err := randomName(length, lettersOnly, uppercase)
    if err != nil {
        fmt.Println(err)
        os.Exit(1)
    }
    fmt.Println(s)
}


