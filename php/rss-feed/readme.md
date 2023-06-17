# Feed-PHP

## Deutsch:

Feed-PHP ist eine kleine und leicht zu benutzende Bibliothek für PHP, die zum Verarbeiten eines RSS- oder Atom-Feeds dient. Sie ermöglicht es, den Feed zu laden, zu lesen und in ein Array zu konvertieren.

Die Klasse Feed unterstützt das Caching von Feed-Daten, um unnötige HTTP-Anfragen zu vermeiden und die Performance zu verbessern.

RSS & Atom Feeds für PHP
========================

RSS & Atom Feeds für PHP ist eine sehr kleine und benutzerfreundliche Bibliothek zum Verarbeiten von RSS- und Atom-Feeds.

Es erfordert PHP 5.3 oder neuer mit der CURL-Erweiterung oder aktiviertem allow_url_fopen.

Verwendung
-----

RSS-Feed von einer URL herunterladen:

```php
$rss = Feed::loadRss($url);
```

Die zurückgegebenen Eigenschaften sind SimpleXMLElement-Objekte. Das Extrahieren der Informationen aus dem Kanal ist einfach:

```php
echo 'Title: ', $rss->title;
echo 'Description: ', $rss->description;
echo 'Link: ', $rss->url;

foreach ($rss->item as $item) {
    echo 'Title: ', $item->title;
    echo 'Link: ', $item->url;
    echo 'Timestamp: ', $item->timestamp;
    echo 'Description ', $item->description;
    echo 'HTML encoded content: ', $item->{'content:encoded'};
}
```

Atom-Feed von einer URL herunterladen:

```php
$atom = Feed::loadAtom($url);
```

Sie können auch die Zwischenspeicherung aktivieren:

```php
Feed::$cacheDir = __DIR__ . '/tmp';
Feed::$cacheExpire = '5 hours';
```

Sie können bei Bedarf einen User-Agent einrichten:

```php
Feed::$userAgent = "FeedFetcher-Google; (+http://www.google.com/feedfetcher.html)";
```

## Englisch:

Feed-PHP is a small and easy-to-use library for PHP for consuming an RSS or Atom feed. It allows to load, read, and convert the feed into an array.

The Feed class supports caching of feed data to avoid unnecessary HTTP requests and improve performance.
