<?php

namespace design_patterns\bridge;

use PHPUnit\Framework\TestCase;

/*
$darkTheme = new DarkTheme();

$about = new About($darkTheme);
$careers = new Careers($darkTheme);

echo $about->getContent(); // "About page in Dark Black";
echo $careers->getContent(); // "Careers page in Dark Black";
*/

class BridgeTest extends TestCase
{
    public function test01(): void
    {
        $darkTheme = new DarkTheme();

        $about = new About($darkTheme);
        $careers = new Careers($darkTheme);

        $this->assertEquals('About page in Dark Black', $about->getContent());
        $this->assertEquals('Careers page in Dark Black', $careers->getContent());
    }

    public function test02(): void
    {
        $lightTheme = new LightTheme();

        $about = new About($lightTheme);
        $careers = new Careers($lightTheme);

        $this->assertEquals('About page in Off White', $about->getContent());
        $this->assertEquals('Careers page in Off White', $careers->getContent());
    }
}
