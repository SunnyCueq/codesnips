use std::env;

fn format_file_size(bytes: f64, precision: usize, nbsp: bool) -> String {
    if bytes == 0.0 { return "n/a".to_string(); }
    let units = ["B", "KB", "MB", "GB", "TB", "PB"];
    let mut pow = (bytes.ln() / 1024f64.ln()).floor() as usize;
    if pow > units.len() - 1 { pow = units.len() - 1; }
    let value = bytes / 1024f64.powi(pow as i32);
    let space = if nbsp { "\u{00A0}" } else { " " };
    format!("{:.*}{}{}", precision, value, space, units[pow])
}

fn main() {
    let args: Vec<String> = env::args().collect();
    if args.len() < 2 {
        eprintln!("usage: format_file_size <bytes> [precision]");
        std::process::exit(1);
    }
    let b: f64 = args[1].parse().unwrap_or(0.0);
    let p: usize = if args.len() > 2 { args[2].parse().unwrap_or(2) } else { 2 };
    println!("{}", format_file_size(b, p, true));
}


