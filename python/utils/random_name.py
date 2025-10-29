from __future__ import annotations

import secrets
import string


def random_name(length: int, letters_only: bool = False, uppercase: bool = False) -> str:
    if not isinstance(length, int) or length <= 0:
        raise TypeError("length must be a positive integer")

    if not letters_only:
        # Hex string from secure random bytes
        return secrets.token_hex((length + 1) // 2)[:length]

    alphabet = string.ascii_uppercase if uppercase else string.ascii_lowercase
    return ''.join(secrets.choice(alphabet) for _ in range(length))


if __name__ == "__main__":
    import sys

    try:
        length = int(sys.argv[1])
        letters_only = (sys.argv[2].lower() == 'true') if len(sys.argv) > 2 else False
        uppercase = (sys.argv[3].lower() == 'true') if len(sys.argv) > 3 else False
        print(random_name(length, letters_only, uppercase))
    except Exception as exc:  # pragma: no cover
        print(getattr(exc, "message", str(exc)))
        sys.exit(1)


