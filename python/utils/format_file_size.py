from __future__ import annotations

import math
from typing import Final


UNITS: Final = ("B", "KB", "MB", "GB", "TB", "PB")


def format_file_size(bytes_value: int | float, precision: int = 2, non_breaking_space: bool = True) -> str:
    if not isinstance(bytes_value, (int, float)) or math.isnan(bytes_value) or bytes_value < 0:
        raise TypeError("bytes_value must be a non-negative number")
    if bytes_value == 0:
        return "n/a"

    pow_index = min(int(math.floor(math.log(bytes_value, 1024))), len(UNITS) - 1)
    value = bytes_value / (1024 ** pow_index)
    space = "\u00A0" if non_breaking_space else " "
    return f"{value:.{precision}f}{space}{UNITS[pow_index]}"


if __name__ == "__main__":
    import sys

    try:
        bytes_arg = float(sys.argv[1])
        precision_arg = int(sys.argv[2]) if len(sys.argv) > 2 else 2
        print(format_file_size(bytes_arg, precision_arg))
    except Exception as exc:  # pragma: no cover - simple CLI helper
        print(getattr(exc, "message", str(exc)))
        sys.exit(1)


