<?php

require './vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;


$client = new Client();

$url = 'https://www.alura.com.br/cursos-online-programacao/php';

$response = $client->request('GET',$url);

$html = $response->getBody();

$crawler = new Crawler();
$crawler->addHtmlContent($html);

$cursos = $crawler->filter('span.card-curso__nome');

foreach($cursos as $curso){
  echo $curso->textContent.PHP_EOL;
}