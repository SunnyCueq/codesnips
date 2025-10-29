local function hex_random(length)
  local bytes = {}
  for _ = 1, math.ceil(length / 2) do
    bytes[#bytes+1] = string.format('%02x', math.random(0, 255))
  end
  return table.concat(bytes):sub(1, length)
end

local function random_name(length, letters_only, uppercase)
  if not length or length <= 0 then error('length must be positive') end
  if not letters_only then
    return hex_random(length)
  end
  local alphabet = uppercase and 'ABCDEFGHIJKLMNOPQRSTUVWXYZ' or 'abcdefghijklmnopqrstuvwxyz'
  local out = {}
  for i = 1, length do
    local idx = math.random(1, #alphabet)
    out[#out+1] = string.sub(alphabet, idx, idx)
  end
  return table.concat(out)
end

if pcall(debug.getlocal, 4, 1) == false then
  local length = tonumber(arg and arg[1] or '8') or 8
  local letters_only = (arg and arg[2] == 'true') or false
  local uppercase = (arg and arg[3] == 'true') or false
  print(random_name(length, letters_only, uppercase))
end

return { random_name = random_name }


