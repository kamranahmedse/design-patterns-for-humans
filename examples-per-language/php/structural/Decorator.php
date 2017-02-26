<?php

use designPatternsForHumans\structural\Decorator\MilkCoffee;
use designPatternsForHumans\structural\Decorator\SimpleCoffee;
use designPatternsForHumans\structural\Decorator\VanillaCoffee;
use designPatternsForHumans\structural\Decorator\WhipCoffee;

require_once __DIR__ . '/autoload.php';

$someCoffee = new SimpleCoffee();
echo $someCoffee->getCost() . PHP_EOL;
echo $someCoffee->getDescription() . PHP_EOL;

$someCoffee = new MilkCoffee($someCoffee);
echo $someCoffee->getCost() . PHP_EOL;
echo $someCoffee->getDescription() . PHP_EOL;

$someCoffee = new WhipCoffee($someCoffee);
echo $someCoffee->getCost() . PHP_EOL;
echo $someCoffee->getDescription() . PHP_EOL;

$someCoffee = new VanillaCoffee($someCoffee);
echo $someCoffee->getCost() . PHP_EOL;
echo $someCoffee->getDescription() . PHP_EOL;