<?php

namespace design_patterns\simple_factory;

use PHPUnit\Framework\TestCase;

//
//// Make me a door of 100x200
//$door = DoorFactory::makeDoor(100, 200);
//
//echo 'Width: ' . $door->getWidth();
//echo 'Height: ' . $door->getHeight();
//
//// Make me a door of 50x100
//$door2 = DoorFactory::makeDoor(50, 100);

class SimpleFactoryTest extends TestCase
{
    public function test01(): void
    {
        $door = DoorFactory::makeDoor(100, 200);
        self::assertEquals(100, $door->getWidth());
        self::assertEquals(200, $door->getHeight());
    }

    public function test02(): void
    {
        $door2 = DoorFactory::makeDoor(50, 100);
        self::assertEquals(50, $door2->getWidth());
        self::assertEquals(100, $door2->getHeight());
    }
}
