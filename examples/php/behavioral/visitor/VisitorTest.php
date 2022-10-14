<?php

namespace design_patterns\behavioral\visitor;

use PHPUnit\Framework\TestCase;

/*
$monkey = new Monkey();
$lion = new Lion();
$dolphin = new Dolphin();

$speak = new Speak();

$monkey->accept($speak);    // Ooh oo aa aa!
$lion->accept($speak);      // Roaaar!
$dolphin->accept($speak);   // Tuut tutt tuutt!

$jump = new Jump();

$monkey->accept($speak);   // Ooh oo aa aa!
$monkey->accept($jump);    // Jumped 20 feet high! on to the tree!

$lion->accept($speak);     // Roaaar!
$lion->accept($jump);      // Jumped 7 feet! Back on the ground!

$dolphin->accept($speak);  // Tuut tutt tuutt!
$dolphin->accept($jump);   // Walked on water a little and disappeared
*/

class VisitorTest extends TestCase
{
    public function test01(): void
    {
        $monkey = new Monkey();
        $lion = new Lion();
        $dolphin = new Dolphin();

        $speak = new Speak();

        self::assertEquals('Ooh oo aa aa!', $monkey->accept($speak));
        self::assertEquals('Roaaar!', $lion->accept($speak));
        self::assertEquals('Tuut tutt tuutt!', $dolphin->accept($speak));

        $jump = new Jump();

        self::assertEquals('Ooh oo aa aa!', $monkey->accept($speak));
        self::assertEquals('Jumped 20 feet high! on to the tree!', $monkey->accept($jump));

        self::assertEquals('Roaaar!', $lion->accept($speak));
        self::assertEquals('Jumped 7 feet! Back on the ground!', $lion->accept($jump));

        self::assertEquals('Tuut tutt tuutt!', $dolphin->accept($speak));
        self::assertEquals('Walked on water a little and disappeared', $dolphin->accept($jump));
    }
}
