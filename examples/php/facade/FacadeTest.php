<?php

namespace design_patterns\facade;

use PHPUnit\Framework\TestCase;

/*
$computer = new ComputerFacade(new Computer());
$computer->turnOn(); // Ouch! Beep beep! Loading.. Ready to be used!
$computer->turnOff(); // Bup bup buzzz! Haah! Zzzzz
*/

class FacadeTest extends TestCase
{
    public function test01(): void
    {
        $computer = new ComputerFacade(new Computer());
        self::assertEquals('Ouch! Beep beep! Loading.. Ready to be used!', $computer->turnOn());
        self::assertEquals('Bup bup bup buzzzz! Haaah! Zzzzz', $computer->turnOff());
    }
}
