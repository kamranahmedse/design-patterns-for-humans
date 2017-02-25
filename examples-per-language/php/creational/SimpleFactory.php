<?php

use designPatternsForHumans\creational\SimpleFactory\DoorFactory;
require_once __DIR__ . '/autoload.php';

$door = DoorFactory::makeDoor(100, 200);

echo 'Width: ' . $door->getWidth() . PHP_EOL;
echo 'Height: ' . $door->getHeight() . PHP_EOL;