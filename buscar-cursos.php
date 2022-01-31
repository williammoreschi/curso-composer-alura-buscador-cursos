#!/usr/bin/env php
<?php

require './vendor/autoload.php';

use WilliamMoreschi\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri'=>'https://www.alura.com.br']);
$crawler = new Crawler();

$buscador = new Buscador($client,$crawler);
$cursos = $buscador->buscar('cursos-online-programacao/php');

foreach($cursos as $curso){
    mostraTexto($curso);
}