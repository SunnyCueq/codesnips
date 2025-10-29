/**
 * Format a number of bytes into a human-readable string.
 * @param {number} bytes non-negative number of bytes
 * @param {{precision?: number, nonBreakingSpace?: boolean}} [options]
 * @returns {string}
 */
export function formatFileSize(bytes, { precision = 2, nonBreakingSpace = true } = {}) {
  if (typeof bytes !== 'number' || Number.isNaN(bytes) || bytes < 0) {
    throw new TypeError('bytes must be a non-negative number');
  }
  if (bytes === 0) return 'n/a';

  const units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];
  const pow = Math.min(Math.floor(Math.log(bytes) / Math.log(1024)), units.length - 1);
  const value = bytes / 1024 ** pow;
  const space = nonBreakingSpace ? '\u00A0' : ' ';
  return `${value.toFixed(precision)}${space}${units[pow]}`;
}

// CLI usage: node formatFileSize.mjs <bytes> [precision]
if (import.meta.url === `file://${process.argv[1]}`) {
  const bytes = Number(process.argv[2]);
  const precision = process.argv[3] !== undefined ? Number(process.argv[3]) : 2;
  try {
    console.log(formatFileSize(bytes, { precision }));
  } catch (err) {
    console.error(err.message);
    process.exit(1);
  }
}


