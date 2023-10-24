<?php

require 'vendor/autoload.php'; // Laden der Composer-Abhängigkeiten

use GuzzleHttp\Client;
use GuzzleHttp\Cookie\SetCookie;
use GuzzleHttp\Cookie\CookieJar as GuzzleCookieJar;

// Definition Ihrer eigenen CookieJar Klasse
class MyCookieJar {
    private $cookies = [];

    public function add(SetCookie $cookie) {
        $this->cookies[] = $cookie;
    }

    public function getIterator() {
        return new ArrayIterator($this->cookies);
    }
}

// Erstellen eines Cookie-Glases (Ihre eigene Implementierung)
$myJar = new MyCookieJar();

// Zum Beispiel: Sie können Ihrer eigenen CookieJar Klasse Cookies hinzufügen.
// $myJar->add(new SetCookie(['Name' => 'test', 'Value' => 'testvalue', 'Domain' => 'example.com']));

// Erstellen eines Guzzle CookieJar mit Ihren eigenen Cookies
$guzzleJarFromMyJar = new GuzzleCookieJar(false, iterator_to_array($myJar->getIterator()));

// Erstellen eines separaten Guzzle CookieJars
$guzzleJarFromArray = GuzzleCookieJar::fromArray([
    'cookie_name' => 'cookie_value'
], 'example.com');

// Erstellen eines Guzzle Clients
$client = new Client();

// Senden einer Anfrage mit dem Cookie-Glas von Ihrer eigenen Implementierung
$responseFromMyJar = $client->request('GET', 'https://example.com', ['cookies' => $guzzleJarFromMyJar]);

// Ausgabe der Antwort
echo "Response from MyCookieJar:\n";
echo $responseFromMyJar->getBody();
echo "\n\n";

// Senden einer Anfrage mit dem separaten Guzzle CookieJar
$responseFromArray = $client->request('GET', 'https://example.com/get', ['cookies' => $guzzleJarFromArray]);

// Ausgabe der Antwort
echo "Response from GuzzleCookieJar::fromArray:\n";
echo $responseFromArray->getBody();
?>
