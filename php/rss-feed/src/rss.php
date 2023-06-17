<?php

/**
 * RSS für PHP - small and easy-to-use library for consuming an RSS Feed
 * RSS for PHP - kleine und einfach zu verwendende Bibliothek zum Verarbeiten eines RSS-Feeds
 *
 * @copyright  Copyright (c) 2008 David Grudl
 * @license    New BSD License
 * @version    1.5
 */
class Feed
{
    /** @var int */
    public static $cacheExpire = '1 day'; // Cache-Ablaufzeit (standardmäßig 1 Tag) / Cache expiry time (default is 1 day)

    /** @var string */
    public static $cacheDir; // Verzeichnis für Cache-Dateien / Directory for cache files

    /** @var string */
    public static $userAgent = 'FeedFetcher-Google'; // User-Agent für HTTP-Anfragen / User-Agent for HTTP requests

    /** @var SimpleXMLElement */
    protected $xml; // Das SimpleXMLElement-Objekt, das den Feed darstellt / The SimpleXMLElement object representing the feed

    /**
     * Lädt einen RSS- oder Atom-Feed.
     * Loads an RSS or Atom feed.
     *
     * @param string $url
     * @param string|null $user
     * @param string|null $pass
     * @return Feed
     * @throws FeedException
     */
    public static function load($url, $user = null, $pass = null)
    {
        $xml = self::loadXml($url, $user, $pass);
        if ($xml->channel) {
            return self::fromRss($xml);
        } else {
            return self::fromAtom($xml);
        }
    }

    /**
     * Lädt einen RSS-Feed.
     * Loads an RSS feed.
     *
     * @param string $url
     * @param string|null $user
     * @param string|null $pass
     * @return Feed
     * @throws FeedException
     */
    public static function loadRss($url, $user = null, $pass = null)
    {
        return self::fromRss(self::loadXml($url, $user, $pass));
    }

    /**
     * Lädt einen Atom-Feed.
     * Loads an Atom feed.
     *
     * @param string $url
     * @param string|null $user
     * @param string|null $pass
     * @return Feed
     * @throws FeedException
     */
    public static function loadAtom($url, $user = null, $pass = null)
    {
        return self::fromAtom(self::loadXml($url, $user, $pass));
    }

    /**
     * Wandelt ein SimpleXMLElement in ein Array um.
     * Converts a SimpleXMLElement to an array.
     *
     * @param SimpleXMLElement|null $xml
     * @return array
     */
    public function toArray(SimpleXMLElement $xml = null)
    {
        if ($xml === null) {
            $xml = $this->xml;
        }

        if (!$xml->children()) {
            return (string) $xml;
        }

        $arr = [];
        foreach ($xml->children() as $tag => $child) {
            if (count($xml->$tag) === 1) {
                $arr[$tag] = $this->toArray($child);
            } else {
                $arr[$tag][] = $this->toArray($child);
            }
        }

        return $arr;
    }

    // Weitere Funktionen / Other functions...

    // Funktionen zum Laden und Verarbeiten des Feeds, HTTP-Anfrage, Umgang mit Namespaces usw.
    // Functions for loading and processing the feed, HTTP request, handling namespaces, etc.

    /**
     * Lädt XML aus dem Cache oder per HTTP.
     * Loads XML from cache or HTTP.
     *
     * @param string $url
     * @param string|null $user
     * @param string|null $pass
     * @return SimpleXMLElement
     * @throws FeedException
     */
    private static function loadXml($url, $user, $pass)
    {
        $e = self::$cacheExpire;
        $cacheFile = self::$cacheDir . '/feed.' . md5(serialize(func_get_args())) . '.xml';

        if (self::$cacheDir
            && (time() - @filemtime($cacheFile) <= (is_string($e) ? strtotime($e) - time() : $e))
            && $data = @file_get_contents($cacheFile)
        ) {
            // OK
        } elseif ($data = trim(self::httpRequest($url, $user, $pass))) {
            if (self::$cacheDir) {
                file_put_contents($cacheFile, $data);
            }
        } elseif (self::$cacheDir && $data = @file_get_contents($cacheFile)) {
            // OK
        } else {
            throw new FeedException('Cannot load feed.');
        }

        return new SimpleXMLElement($data, LIBXML_NOWARNING | LIBXML_NOERROR | LIBXML_NOCDATA);
    }

    /**
     * Verarbeitet eine HTTP-Anfrage.
     * Processes an HTTP request.
     *
     * @param string $url
     * @param string|null $user
     * @param string|null $pass
     * @return string|false
     * @throws FeedException
     */
    private static function httpRequest($url, $user, $pass)
    {
        if (extension_loaded('curl')) {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            if ($user !== null || $pass !== null) {
                curl_setopt($curl, CURLOPT_USERPWD, "$user:$pass");
            }
            curl_setopt($curl, CURLOPT_USERAGENT, self::$userAgent); // einige Feeds erfordern einen User-Agent / some feeds require a user agent
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_TIMEOUT, 20);
            curl_setopt($curl, CURLOPT_ENCODING, '');
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // keine Ausgabe, sondern Rückgabe des Ergebnisses / no echo, just return result
            curl_setopt($curl, CURLOPT_USERAGENT, '');
            if (!ini_get('open_basedir')) {
                curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true); // manchmal nützlich :) / sometimes is useful :)
            }
            $result = curl_exec($curl);
            return curl_errno($curl) === 0 && curl_getinfo($curl, CURLINFO_HTTP_CODE) === 200
                ? $result
                : false;
        } else {
            $context = null;
            if ($user !== null && $pass !== null) {
                $options = [
                    'http' => [
                        'method' => 'GET',
                        'header' => 'Authorization: Basic ' . base64_encode($user . ':' . $pass) . "\r\n",
                    ],
                ];
                $context = stream_context_create($options);
            }

            return file_get_contents($url, false, $context);
        }
    }

    /**
     * Generiert besser zugängliche Namespaced-Tags.
     * Generates better accessible namespaced tags.
     *
     * @param SimpleXMLElement $el
     * @return void
     */
    private static function adjustNamespaces($el)
    {
        foreach ($el->getNamespaces(true) as $prefix => $ns) {
            if ($prefix === '') {
                continue;
            }
            $children = $el->children($ns);
            foreach ($children as $tag => $content) {
                $el->{$prefix . ':' . $tag} = $content;
            }
        }
    }
}

/**
 * Eine durch Feed erzeugte Ausnahme.
 * An exception generated by Feed.
 */
class FeedException extends Exception
{
}
