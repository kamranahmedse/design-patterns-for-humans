<?php

namespace design_patterns\decorator;

use PHPUnit\Framework\TestCase;

/*
$someCoffee = new SimpleCoffee();
echo $someCoffee->getCost(); // 10
echo $someCoffee->getDescription(); // Simple Coffee

$someCoffee = new MilkCoffee($someCoffee);
echo $someCoffee->getCost(); // 12
echo $someCoffee->getDescription(); // Simple Coffee, milk

$someCoffee = new WhipCoffee($someCoffee);
echo $someCoffee->getCost(); // 17
echo $someCoffee->getDescription(); // Simple Coffee, milk, whip

$someCoffee = new VanillaCoffee($someCoffee);
echo $someCoffee->getCost(); // 20
echo $someCoffee->getDescription(); // Simple Coffee, milk, whip, vanilla
*/

class DecoratorTest extends TestCase
{
    public function test01(): void
    {
        $someCoffee = new SimpleCoffee();
        self::assertEquals(10, $someCoffee->getCost());
        self::assertEquals('Simple Coffee', $someCoffee->getDescription());

        $someCoffee = new MilkCoffee($someCoffee);
        self::assertEquals(12, $someCoffee->getCost());
        self::assertEquals('Simple Coffee, milk', $someCoffee->getDescription());

        $someCoffee = new WhipCoffee($someCoffee);
        self::assertEquals(17, $someCoffee->getCost());
        self::assertEquals('Simple Coffee, milk, whip', $someCoffee->getDescription());

        $someCoffee = new VanillaCoffee($someCoffee);
        self::assertEquals(20, $someCoffee->getCost());
        self::assertEquals('Simple Coffee, milk, whip, vanilla', $someCoffee->getDescription());
    }
}
