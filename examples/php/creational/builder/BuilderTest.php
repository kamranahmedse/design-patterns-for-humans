<?php

namespace design_patterns\creational\builder;

use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function test01(): void
    {
        $burger = (new BurgerBuilder(14))
            ->addPepperoni()
            ->addLettuce()
            ->addTomato()
            ->build();

        self::assertEquals(14, $burger->size);
        self::assertFalse($burger->cheese);
        self::assertTrue($burger->pepperoni);
        self::assertTrue($burger->lettuce);
        self::assertTrue($burger->tomato);
    }
}
