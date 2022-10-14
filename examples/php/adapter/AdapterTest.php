<?php

namespace design_patterns\adapter;

use PHPUnit\Framework\TestCase;

/*
$wildDog = new WildDog();
$wildDogAdapter = new WildDogAdapter($wildDog);

$hunter = new Hunter();
$hunter->hunt($wildDogAdapter);
*/

class AdapterTest extends TestCase
{
    public function test01(): void
    {
        $wildDog = new WildDog();
        $wildDogAdapter = new WildDogAdapter($wildDog);

        $hunter = new Hunter();

        self::assertEquals("WildDog: Bark!", $hunter->hunt($wildDogAdapter));
    }
}
