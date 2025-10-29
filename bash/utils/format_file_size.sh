#!/usr/bin/env bash
set -euo pipefail

bytes=${1:-}
precision=${2:-2}

if [[ -z ${bytes} ]]; then
  echo "Usage: $0 <bytes> [precision]" >&2
  exit 1
fi

if [[ ${bytes} == 0 ]]; then
  echo "n/a"
  exit 0
fi

units=(B KB MB GB TB PB)

pow=0
val=${bytes}
while (( $(awk -v v="$val" 'BEGIN{print (v>=1024)}') )); do
  val=$(awk -v v="$val" 'BEGIN{printf "%.10f", v/1024}')
  ((pow++))
  (( pow >= ${#units[@]}-1 )) && break
done

space=$'\u00A0'
printf "%.*f%s%s\n" "$precision" "$val" "$space" "${units[$pow]}"


