<?php

use designPatternsForHumans\creational\AbstractFactory\IronDoorFactory;
use designPatternsForHumans\creational\AbstractFactory\WoodenDoorFactory;

require_once __DIR__ . '/autoload.php';

$woodenDoorFactory = new WoodenDoorFactory();

$door = $woodenDoorFactory->makeDoor();
$expert = $woodenDoorFactory->makeFittingExpert();

$door->getDescription();
$expert->getDescription();

$ironFactory = new IronDoorFactory();

$door = $ironFactory->makeDoor();
$expert = $ironFactory->makeFittingExpert();

$door->getDescription();
$expert->getDescription();

