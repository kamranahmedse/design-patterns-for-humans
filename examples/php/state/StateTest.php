<?php

namespace design_patterns\state;

use PHPUnit\Framework\TestCase;

/*
$editor = new TextEditor(new DefaultText());

$editor->type('First line');

$editor->setState(new UpperCase());

$editor->type('Second line');
$editor->type('Third line');

$editor->setState(new LowerCase());

$editor->type('Fourth line');
$editor->type('Fifth line');

// Output:
// First line
// SECOND LINE
// THIRD LINE
// fourth line
// fifth line
*/
class StateTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        echo 1, "\n";
    }

    public function test01():void
    {
        $editor = new TextEditor(new DefaultText());

        self::assertEquals('First line', $editor->type('First line'));

        $editor->setState(new UpperCase());

        self::assertEquals('SECOND LINE', $editor->type('Second line'));
        self::assertEquals('THIRD LINE', $editor->type('Third line'));

        $editor->setState(new LowerCase());

        self::assertEquals('fourth line', $editor->type('Fourth line'));
        self::assertEquals('fifth line', $editor->type('Fifth line'));
    }

    public function test02():void
    {
        $editor = new TextEditor(new DefaultText());

        self::assertEquals('First line', $editor->type('First line'));

        $editor->setState(new UpperCase());

        self::assertEquals('SECOND LINE', $editor->type('Second line'));
        self::assertEquals('THIRD LINE', $editor->type('Third line'));

        $editor->setState(new LowerCase());

        self::assertEquals('fourth line', $editor->type('Fourth line'));
        self::assertEquals('fifth line', $editor->type('Fifth line'));
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        echo 2, "\n";
    }
}
