def format_file_size(bytes, precision: 2, nbsp: true)
  return 'n/a' if bytes.to_f == 0.0
  units = %w[B KB MB GB TB PB]
  pow = [[(Math.log(bytes) / Math.log(1024)).floor, units.length - 1].min, 0].max
  value = bytes.to_f / (1024 ** pow)
  space = nbsp ? "\u00A0" : ' '
  format("%.#{precision}f%s%s", value, space, units[pow])
end

if __FILE__ == $0
  b = (ARGV[0] || '0').to_f
  p = (ARGV[1] || '2').to_i
  puts format_file_size(b, precision: p)
end


