<?php

namespace design_patterns\command;

use PHPUnit\Framework\TestCase;

/*
$bulb = new Bulb();

$turnOn = new TurnOn($bulb);
$turnOff = new TurnOff($bulb);

$remote = new RemoteControl();
$remote->submit($turnOn); // Bulb has been lit!
$remote->submit($turnOff); // Darkness!
*/

class CommandTest extends TestCase
{
    public function test01(): void
    {
        $bulb = new Bulb();

        $turnOn = new TurnOn($bulb);
        $turnOff = new TurnOff($bulb);

        $remote = new RemoteControl();
        self::assertEquals('Bulb has been lit!', $remote->submit($turnOn));
        self::assertEquals('Darkness!', $remote->submit($turnOff));
    }
}
