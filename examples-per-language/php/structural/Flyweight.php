<?php

use designPatternsForHumans\structural\Flyweight\TeaMaker;
use designPatternsForHumans\structural\Flyweight\TeaShop;

require_once __DIR__ . '/autoload.php';

$teaMaker = new TeaMaker();
$shop = new TeaShop($teaMaker);

$shop->takeOrder('less sugar', 1);
$shop->takeOrder('more milk', 2);
$shop->takeOrder('without sugar', 5);
$shop->takeOrder('without sugar', 3);
$shop->takeOrder('less sugar', 3);

$shop->serve();