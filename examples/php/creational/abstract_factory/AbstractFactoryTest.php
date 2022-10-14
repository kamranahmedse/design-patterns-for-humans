<?php

namespace design_patterns\creational\abstract_factory;

use PHPUnit\Framework\TestCase;

/*
// Wooden factory to return carpenter and wooden door

$woodenFactory = new WoodenDoorFactory();

$door = $woodenFactory->makeDoor();
$expert = $woodenFactory->makeFittingExpert();

$door->getDescription();  // Output: I am a wooden door
$expert->getDescription(); // Output: I can only fit wooden doors

// Iron door factory to get iron door and the relevant fitting expert

// Same for Iron Factory
$ironFactory = new IronDoorFactory();

$door = $ironFactory->makeDoor();
$expert = $ironFactory->makeFittingExpert();

$door->getDescription();  // Output: I am an iron door
$expert->getDescription(); // Output: I can only fit iron doors
*/

class AbstractFactoryTest extends TestCase
{
    public function test01(): void
    {
        $woodenFactory = new WoodenDoorFactory();

        $door = $woodenFactory->makeDoor();
        $expert = $woodenFactory->makeFittingExpert();

        self::assertEquals("I am a wooden door", $door->getDescription());
        self::assertEquals("I can only fit wooden doors", $expert->getDescription());
    }

    public function test02(): void
    {
        $ironFactory = new IronDoorFactory();

        $door = $ironFactory->makeDoor();
        $expert = $ironFactory->makeFittingExpert();

        self::assertEquals("I am an iron door", $door->getDescription());
        self::assertEquals("I can only fit iron doors", $expert->getDescription());
    }
}
