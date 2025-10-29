#!/usr/bin/env node
import { program } from 'commander';
import { formatFileSize } from '../utils/formatFileSize.mjs';
import { randomName } from '../utils/random_name.mjs';

program
  .name('utils')
  .description('Utilities CLI')
  .version('1.0.0');

program
  .command('format-file-size')
  .argument('<bytes>')
  .option('-p, --precision <n>', 'precision', '2')
  .action((bytes, opts) => {
    const precision = Number(opts.precision);
    console.log(formatFileSize(Number(bytes), { precision }));
  });

program
  .command('random-name')
  .argument('<length>')
  .option('--letters-only', 'letters only', false)
  .option('--uppercase', 'uppercase letters', false)
  .action((length, opts) => {
    console.log(randomName(Number(length), { lettersOnly: !!opts.lettersOnly, uppercase: !!opts.uppercase }));
  });

program.parse();


