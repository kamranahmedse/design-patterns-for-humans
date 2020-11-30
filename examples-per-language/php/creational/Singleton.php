<?php

use designPatternsForHumans\creational\Singleton\President;

require_once __DIR__ . '/autoload.php';

$president1 = President::getInstance();
$president2 = President::getInstance();

echo 'Are both presidents 100% identical? ';
var_dump($president1 === $president2);
