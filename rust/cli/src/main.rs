use clap::{Parser, Subcommand};

#[derive(Parser)]
#[command(name = "codesnips")] 
#[command(about = "Utilities CLI", long_about = None)]
struct Cli {
    #[command(subcommand)]
    command: Commands,
}

#[derive(Subcommand)]
enum Commands {
    /// Format bytes as human-readable size
    FormatFileSize { bytes: f64, #[arg(short, long, default_value_t = 2)] precision: usize },
    /// Generate a random name/id
    RandomName { length: usize, #[arg(long, default_value_t = false)] letters_only: bool, #[arg(long, default_value_t = false)] uppercase: bool },
}

fn format_file_size(bytes: f64, precision: usize, nbsp: bool) -> String {
    if bytes == 0.0 { return "n/a".to_string(); }
    let units = ["B", "KB", "MB", "GB", "TB", "PB"];
    let mut pow = (bytes.ln() / 1024f64.ln()).floor() as usize;
    if pow > units.len() - 1 { pow = units.len() - 1; }
    let value = bytes / 1024f64.powi(pow as i32);
    let space = if nbsp { "\u{00A0}" } else { " " };
    format!("{:.*}{}{}", precision, value, space, units[pow])
}

fn random_name(length: usize, letters_only: bool, uppercase: bool) -> String {
    assert!(length > 0);
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
    let cli = Cli::parse();
    match cli.command {
        Commands::FormatFileSize { bytes, precision } => println!("{}", format_file_size(bytes, precision, true)),
        Commands::RandomName { length, letters_only, uppercase } => println!("{}", random_name(length, letters_only, uppercase)),
    }
}


