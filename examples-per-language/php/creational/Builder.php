<?php

use designPatternsForHumans\creational\Builder\BurgerBuilder;

require_once __DIR__ . '/autoload.php';

$burger = (new BurgerBuilder(14))
  ->addPepperoni()
  ->addLettuce()
  ->addTomato()
  ->build();

var_dump($burger);