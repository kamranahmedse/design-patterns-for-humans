<?php

use designPatternsForHumans\structural\Adapter\Hunter;
use designPatternsForHumans\structural\Adapter\WildDog;
use designPatternsForHumans\structural\Adapter\WildDogAdapter;

require_once __DIR__ . '/autoload.php';

$wildDog = new WildDog();
$wildDogAdapter = new WildDogAdapter($wildDog);

$hunter = new Hunter();
$hunter->hunt($wildDogAdapter);
