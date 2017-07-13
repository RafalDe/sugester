<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Sugester\Client;
use Sugester\Sugester;

$sugester = new Sugester('F2SPXNamdGIADhKVxy5/sungrey');

$client = new Client;
$client->setFirstName('Imie')
->setEmail('b.gajda@sungrey.pl')
->setLastName('Nazwisko')
->setStreet('Ulica 65')
->setStreetNo('66')
->setCity('Pogwizdów')
->setPhone('666666666')
->setPostCode('65-500')
->setProjectId('538898')
->setDescription('Testowy klient')
->setNote('Typ miarki: kołek jubilerski'.PHP_EOL.'Produkt: Produkt testowy'.PHP_EOL.'URL: https://savicki.pl/okazja/pierscionki-zareczynowe/116-pierscionek-zareczynowy-the-light')
->setCountry('Polska');

$ret = $sugester->addClient($client);
print_r(json_decode($ret));
//print_r($client->get());
