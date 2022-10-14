<?php

namespace design_patterns\prototype;

use PHPUnit\Framework\TestCase;

/*
$original = new Sheep('Jolly');
echo $original->getName(); // Jolly
echo $original->getCategory(); // Mountain Sheep

// Clone and modify what is required
$cloned = clone $original;
$cloned->setName('Dolly');
echo $cloned->getName(); // Dolly
echo $cloned->getCategory(); // Mountain sheep
*/

class PrototypeTest extends TestCase
{
    public function test01(): void
    {
        $original = new Sheep('Jolly');
        self::assertEquals('Jolly', $original->getName());
        self::assertEquals('Mountain Sheep', $original->getCategory());

        // Clone and modify what is required
        $cloned = clone $original;
        $cloned->setName('Dolly');
        self::assertEquals('Dolly', $cloned->getName());
        self::assertEquals('Mountain Sheep', $cloned->getCategory());
    }
}
