#!/usr/bin/env bash
set -euo pipefail

length=${1:-}
letters_only=${2:-false}
uppercase=${3:-false}

if [[ -z ${length} ]]; then
  echo "Usage: $0 <length> [lettersOnly] [uppercase]" >&2
  exit 1
fi

if [[ ${letters_only} != true ]]; then
  # hex of random bytes
  bytes=$(( (length + 1) / 2 ))
  out=$(head -c "$bytes" /dev/urandom | od -An -tx1 | tr -d ' \n')
  echo "${out:0:length}"
  exit 0
fi

alphabet='abcdefghijklmnopqrstuvwxyz'
if [[ ${uppercase} == true ]]; then
  alphabet='ABCDEFGHIJKLMNOPQRSTUVWXYZ'
fi

out=''
for ((i=0;i<length;i++)); do
  idx=$(od -An -tu1 -N1 /dev/urandom | tr -d ' ')
  idx=$(( idx % ${#alphabet} ))
  out+="${alphabet:idx:1}"
done
echo "$out"


