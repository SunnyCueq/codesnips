<?php
header('Content-Type: text/html; charset=utf-8');

// Setzt die Standard-Zeitzone, falls sie nicht gesetzt ist
// Set the default timezone if it is not set
if (!ini_get('date.timezone')) {
	date_default_timezone_set('Europe/Prague');
}

// Lädt die Feed-Klasse
// Load the Feed class
require_once 'src/feed.php';


// Lädt den Atom-Feed von 'https://php.vrana.cz/atom.php'
// Load the Atom feed from 'https://php.vrana.cz/atom.php'
$atom = Feed::loadAtom('https://php.vrana.cz/atom.php');

?>

<h1><?php echo htmlspecialchars($atom->title) ?></h1>

<?php foreach ($atom->entry as $entry): ?>
	<h2><a href="<?php echo htmlspecialchars($entry->url) ?>"><?php echo htmlspecialchars($entry->title) ?></a>
	<small><?php echo date('j.n.Y H:i', (int) $entry->timestamp) ?></small></h2>

	<?php if ($entry->content['type'] == 'html'): ?>
		<div><?php echo $entry->content ?></div>
	<?php else: ?>
		<p><?php echo htmlspecialchars($entry->content) ?></p>
	<?php endif ?>
<?php endforeach ?>
