<?php

use designPatternsForHumans\structural\Composite\Designer;
use designPatternsForHumans\structural\Composite\Developer;
use designPatternsForHumans\structural\Composite\Organization;

require_once __DIR__ . '/autoload.php';

$john = new Developer('John Doe', 12000);
$jane = new Designer('Jane', 10000);

// Add to a organization.
$organization = new Organization();
$organization->addEmployee($john);
$organization->addEmployee($jane);

echo 'Net salaries ' . $organization->getNetSalaries() . PHP_EOL;
