<?php

namespace design_patterns\behavioral\mediator;

use PHPUnit\Framework\TestCase;

/*
$mediator = new ChatRoom();

$john = new User('John Doe', $mediator);
$jane = new User('Jane Doe', $mediator);

$john->send('Hi there!');
$jane->send('Hey!');

// Output will be
// Feb 14, 10:58 [John]: Hi there!
// Feb 14, 10:58 [Jane]: Hey!
*/

class MediatorTest extends TestCase
{
    public function test01(): void
    {
        $mediator = new ChatRoom();
        $mediator->setTime('Feb 14, 10:58');

        $john = new User('John', $mediator);
        $jane = new User('Jane', $mediator);

        self::assertEquals('Feb 14, 10:58 [John]: Hi there!', $john->send('Hi there!'));
        self::assertEquals('Feb 14, 10:58 [Jane]: Hey!',$jane ->send('Hey!'));
    }
}
