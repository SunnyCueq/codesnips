use rand::RngCore;
use std::env;

fn random_name(length: usize, letters_only: bool, uppercase: bool) -> String {
    assert!(length > 0, "length must be positive");
    if !letters_only {
        let mut bytes = vec![0u8; (length + 1) / 2];
        rand::thread_rng().fill_bytes(&mut bytes);
        let hex = bytes.iter().map(|b| format!("{:02x}", b)).collect::<String>();
        return hex[..length].to_string();
    }
    let lower = b"abcdefghijklmnopqrstuvwxyz";
    let upper = b"ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    let alphabet = if uppercase { upper } else { lower };
    let mut out = String::with_capacity(length);
    let mut rng = rand::thread_rng();
    for _ in 0..length {
        let idx = (rng.next_u32() as usize) % alphabet.len();
        out.push(alphabet[idx] as char);
    }
    out
}

fn main() {
    let args: Vec<String> = env::args().collect();
    if args.len() < 2 {
        eprintln!("usage: random_name <length> [lettersOnly] [uppercase]");
        std::process::exit(1);
    }
    let length: usize = args[1].parse().unwrap_or(8);
    let letters_only = args.get(2).map(|s| s == "true").unwrap_or(false);
    let uppercase = args.get(3).map(|s| s == "true").unwrap_or(false);
    println!("{}", random_name(length, letters_only, uppercase));
}


