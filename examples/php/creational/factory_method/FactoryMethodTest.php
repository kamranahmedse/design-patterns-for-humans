<?php

namespace design_patterns\creational\factory_method;

use PHPUnit\Framework\TestCase;

/*
$devManager = new DevelopmentManager();
$devManager->takeInterview(); // Output: Asking about design patterns.

$marketingManager = new MarketingManager();
$marketingManager->takeInterview(); // Output: Asking about community building.
*/

class FactoryMethodTest extends TestCase
{
    public function test01(): void
    {
        $devManager = new DevelopmentManager();
        self::assertEquals('Asking about design patterns.', $devManager->takeInterview());

        $marketingManager = new MarketingManager();
        self::assertEquals('Asking about community building.', $marketingManager->takeInterview());
    }
}
