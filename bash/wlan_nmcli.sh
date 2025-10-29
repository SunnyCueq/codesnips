#!/usr/bin/env bash
set -euo pipefail

usage() {
  echo "Usage: $0 [wifi|ethernet]" >&2
  exit 1
}

if ! command -v nmcli >/dev/null 2>&1; then
  echo "nmcli is required" >&2
  exit 2
fi

choice=${1:-}
[[ -z "$choice" ]] && usage

case "$choice" in
  wifi)
    nmcli radio wifi on || true
    nmcli networking on || true
    ;;
  ethernet)
    nmcli radio wifi off || true
    ;;
  *)
    usage
    ;;
esac

echo "Done: $choice"


