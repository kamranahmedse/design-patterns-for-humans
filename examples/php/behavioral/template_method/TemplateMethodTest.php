<?php

namespace design_patterns\behavioral\template_method;

use PHPUnit\Framework\TestCase;

/*
$androidBuilder = new AndroidBuilder();
$androidBuilder->build();

// Output:
// Running android tests
// Linting the android code
// Assembling the android build
// Deploying android build to server

$iosBuilder = new IosBuilder();
$iosBuilder->build();

// Output:
// Running ios tests
// Linting the ios code
// Assembling the ios build
// Deploying ios build to server
*/

class TemplateMethodTest extends TestCase
{
    public function test01(): void
    {
        $androidBuilder = new AndroidBuilder();
        self::assertEquals("Running android tests\nLinting the android code\nAssembling the android build\nDeploying android build to server", $androidBuilder->build());
    }

    public function test02(): void
    {
        $iosBuilder = new IosBuilder();
        self::assertEquals("Running ios tests\nLinting the ios code\nAssembling the ios build\nDeploying ios build to server", $iosBuilder->build());
    }
}
