require 'securerandom'

def random_name(length, letters_only: false, uppercase: false)
  raise ArgumentError, 'length must be positive' unless length.to_i > 0
  if !letters_only
    return SecureRandom.hex((length + 1) / 2)[0, length]
  end
  alphabet = uppercase ? ('A'..'Z').to_a : ('a'..'z').to_a
  Array.new(length) { alphabet[SecureRandom.random_number(alphabet.length)] }.join
end

if __FILE__ == $0
  length = (ARGV[0] || '8').to_i
  letters_only = (ARGV[1] || 'false') == 'true'
  uppercase = (ARGV[2] || 'false') == 'true'
  puts random_name(length, letters_only: letters_only, uppercase: uppercase)
end


