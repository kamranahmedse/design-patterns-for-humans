<?php

use designPatternsForHumans\creational\FactoryMethod\DevelopmentManager;
use designPatternsForHumans\creational\FactoryMethod\MarketingManager;

require_once __DIR__ . '/autoload.php';

$devManager = new DevelopmentManager();
$devManager->takeInterview();

$marketingManager = new MarketingManager();
$marketingManager->takeInterview();
