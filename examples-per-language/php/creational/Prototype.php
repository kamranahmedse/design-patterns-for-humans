<?php

use designPatternsForHumans\creational\Prototype\Sheep;

require_once __DIR__ . '/autoload.php';

$original = new Sheep('Jolly');
echo $original->getName() . PHP_EOL;
echo $original->getCategory() . PHP_EOL;

$cloned = clone $original;
$cloned->setName('Dolly');
echo $cloned->getName() . PHP_EOL;
echo $cloned->getCategory() . PHP_EOL;

echo 'Remember, you can use the magic method __clone to modify the behaviour of cloning the object!';

