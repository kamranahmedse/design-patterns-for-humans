<?php

namespace design_patterns\structural\proxy;

use PHPUnit\Framework\TestCase;

/*
$door = new SecuredDoor(new LabDoor());
$door->open('invalid'); // Big no! It ain't possible.

$door->open('$ecr@t'); // Opening lab door
$door->close(); // Closing lab door
*/

class ProxyTest extends TestCase
{
    public function test01(): void
    {
        $door = new SecuredDoor(new LabDoor());

        self::assertEquals("Big no! It ain't possible.", $door->open('invalid'));
        self::assertEquals('Opening lab door', $door->open('$ecr@t'));
        self::assertEquals('Closing lab door', $door->close());
    }
}
