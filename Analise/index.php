<?php
require_once('googleSearchApi.php');

$googleSearchApi = new googleSearchApi();

// $googleSearchApi->getLinksInSearch('music list fullmetal alchemist');


$columns = array('Anime','Site','Link');
$liks = array(array('FullMetal', 'fma.fandom.com', 'https://fma.fandom.com/wiki/Category:Music'));

$googleSearchApi->generateExcel($columns, $liks);
