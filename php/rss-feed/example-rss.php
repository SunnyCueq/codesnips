<?php
header('Content-Type: text/html; charset=utf-8');

// Setzt die Standard-Zeitzone, falls sie nicht gesetzt ist
// Set the default timezone if it is not set
if (!ini_get('date.timezone')) {
	date_default_timezone_set('Europe/Prague');
}

// Lädt die Feed-Klasse
// Load the Feed class
require_once 'src/Feed.php';

// Lädt den RSS-Feed von 'https://phpfashion.com/feed/rss'
// Load the RSS feed from 'https://phpfashion.com/feed/rss'
$rss = Feed::loadRss('https://phpfashion.com/feed/rss');

?>

<h1><?php echo htmlspecialchars($rss->title) ?></h1>

<p><i><?php echo htmlspecialchars($rss->description) ?></i></p>

<?php foreach ($rss->item as $item): ?>
	<h2><a href="<?php echo htmlspecialchars($item->url) ?>"><?php echo htmlspecialchars($item->title) ?></a>
	<small><?php echo date('j.n.Y H:i', (int) $item->timestamp) ?></small></h2>

	<?php if (isset($item->{'content:encoded'})): ?>
		<div><?php echo $item->{'content:encoded'} ?></div>
	<?php else: ?>
		<p><?php echo htmlspecialchars($item->description) ?></p>
	<?php endif ?>
<?php endforeach ?>
