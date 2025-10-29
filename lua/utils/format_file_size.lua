local function format_file_size(bytes, precision, nbsp)
  precision = precision or 2
  if bytes == 0 then return 'n/a' end
  local units = { 'B', 'KB', 'MB', 'GB', 'TB', 'PB' }
  local pow = math.floor(math.log(bytes) / math.log(1024))
  if pow > #units - 1 then pow = #units - 1 end
  local value = bytes / (1024 ^ pow)
  local space = (nbsp == false) and ' ' or '\u00A0'
  return string.format('%.' .. precision .. 'f%s%s', value, space, units[pow+1])
end

if pcall(debug.getlocal, 4, 1) == false then
  local b = tonumber(arg and arg[1] or '0') or 0
  local p = tonumber(arg and arg[2] or '2') or 2
  print(format_file_size(b, p, true))
end

return { format_file_size = format_file_size }


