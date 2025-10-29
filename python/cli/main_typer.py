from __future__ import annotations

import typer
from typing import Optional

from utils.format_file_size import format_file_size
from utils.random_name import random_name

app = typer.Typer(help="Utilities CLI (format-file-size, random-name)")


@app.command("format-file-size")
def cmd_format_file_size(bytes_value: float, precision: int = 2):
    """Format bytes as human-readable size."""
    typer.echo(format_file_size(bytes_value, precision))


@app.command("random-name")
def cmd_random_name(length: int, letters_only: bool = False, uppercase: bool = False):
    """Generate a random name/id."""
    typer.echo(random_name(length, letters_only, uppercase))


if __name__ == "__main__":
    app()


