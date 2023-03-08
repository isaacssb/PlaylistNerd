<?php
require_once('googleSearchApi.php');

$googleSearchApi = new googleSearchApi();

$googleSearchApi->getLinksInSearch('music list fullmetal alchemist');
