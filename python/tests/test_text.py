from utils.text import truncate, safe_html, remove_line_break, format_url

def test_truncate():
    assert truncate('Hello World', 5) == 'He...'

def test_remove_line_break():
    assert remove_line_break('A\r\n\nB') == 'A\nB'

def test_safe_html():
    assert safe_html('<a>&</a>') == '&lt;a&gt;&amp;&lt;/a&gt;'

def test_format_url():
    assert format_url('example.com').startswith('https://')

print('OK')


