import { randomBytes } from 'node:crypto';

const LOWER = 'abcdefghijklmnopqrstuvwxyz';
const UPPER = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
const DIGITS = '0123456789';

/**
 * Generate a random string.
 * @param {number} length positive integer length
 * @param {{lettersOnly?: boolean, uppercase?: boolean}} [options]
 * @returns {string}
 */
export function randomName(length, { lettersOnly = false, uppercase = false } = {}) {
  if (!Number.isInteger(length) || length <= 0) {
    throw new TypeError('length must be a positive integer');
  }
  if (!lettersOnly) {
    // hex of random bytes, then slice
    return randomBytes(Math.ceil(length / 2)).toString('hex').slice(0, length);
  }

  const alphabet = (uppercase ? UPPER : LOWER);
  const bytes = randomBytes(length);
  let out = '';
  for (let i = 0; i < length; i++) {
    out += alphabet[bytes[i] % alphabet.length];
  }
  return out;
}

// CLI usage: node random_name.mjs <length> [lettersOnly] [uppercase]
if (import.meta.url === `file://${process.argv[1]}`) {
  const length = Number(process.argv[2]);
  const lettersOnly = process.argv[3] ? process.argv[3] === 'true' : false;
  const uppercase = process.argv[4] ? process.argv[4] === 'true' : false;
  try {
    console.log(randomName(length, { lettersOnly, uppercase }));
  } catch (err) {
    console.error(err.message);
    process.exit(1);
  }
}


