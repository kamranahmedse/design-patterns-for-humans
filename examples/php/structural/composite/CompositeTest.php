<?php

namespace design_patterns\structural\composite;

use PHPUnit\Framework\TestCase;


/*
// Prepare the employees
$john = new Developer('John Doe', 12000);
$jane = new Designer('Jane Doe', 15000);

// Add them to organization
$organization = new Organization();
$organization->addEmployee($john);
$organization->addEmployee($jane);

echo "Net salaries: " . $organization->getNetSalaries(); // Net Salaries: 27000
*/

class CompositeTest extends TestCase
{
    public function test01(): void
    {
        $john = new Developer('John Doe', 12000);
        $jane = new Designer('Jane Doe', 15000);

        $organization = new Organization();
        $organization->addEmployee($john);
        $organization->addEmployee($jane);

        self::assertEquals(27000, $organization->getNetSalaries());
    }
}
