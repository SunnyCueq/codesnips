import assert from 'node:assert/strict';
import { truncate, safeHtml, removeLineBreak, formatUrl } from '../utils/text.mjs';

// Smoke tests
assert.equal(truncate('Hello World', 5), 'He...');
assert.equal(truncate('Hello World', 5, '...', false), 'He...');
assert.equal(removeLineBreak('A\r\n\nB'), 'A\nB');
assert.equal(safeHtml('<a>&</a>'), '&lt;a&gt;&amp;&lt;/a&gt;');
assert.ok(formatUrl('example.com').startsWith('https://'));

console.log('OK');


