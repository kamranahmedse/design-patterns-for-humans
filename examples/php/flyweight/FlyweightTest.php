<?php

namespace design_patterns\flyweight;

use PHPUnit\Framework\TestCase;

/*
$teaMaker = new TeaMaker();
$shop = new TeaShop($teaMaker);

$shop->takeOrder('less sugar', 1);
$shop->takeOrder('more milk', 2);
$shop->takeOrder('without sugar', 5);

$shop->serve();
// Serving tea to table# 1
// Serving tea to table# 2
// Serving tea to table# 5
*/

class FlyweightTest extends TestCase
{
    public function test01(): void
    {
        $teaMaker = new TeaMaker();
        $shop = new TeaShop($teaMaker);

        $shop->takeOrder('less sugar', 1);
        $shop->takeOrder('more milk', 2);
        $shop->takeOrder('without sugar', 5);

        self::assertEquals("Serving tea to table 1...\nServing tea to table 2...\nServing tea to table 5...\n", $shop->serve());
    }
}
