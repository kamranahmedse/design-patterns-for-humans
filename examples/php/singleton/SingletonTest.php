<?php

namespace design_patterns\singleton;

use PHPUnit\Framework\TestCase;

/*
$president1 = President::getInstance();
$president2 = President::getInstance();

var_dump($president1 === $president2); // true
*/

class SingletonTest extends TestCase
{
    public function test01(): void
    {
        $president1 = President::getInstance();
        $president2 = President::getInstance();

        self::assertEquals($president1, $president2);
    }
}
