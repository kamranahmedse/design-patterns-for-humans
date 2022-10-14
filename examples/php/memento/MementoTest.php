<?php

namespace design_patterns\memento;

use PHPUnit\Framework\TestCase;

/*
$editor = new Editor();

// Type some stuff
$editor->type('This is the first sentence.');
$editor->type('This is second.');

// Save the state to restore to : This is the first sentence. This is second.
$saved = $editor->save();

// Type some more
$editor->type('And this is third.');

// Output: Content before Saving
echo $editor->getContent(); // This is the first sentence. This is second. And this is third.

// Restoring to last saved state
$editor->restore($saved);

$editor->getContent(); // This is the first sentence. This is second.
*/

class MementoTest extends TestCase
{
    public function test01(): void
    {
        $editor = new Editor();

        // Type some stuff
        $editor->type('This is the first sentence.');
        $editor->type('This is second.');

        // Save the state to restore to : This is the first sentence. This is second.
        $saved = $editor->save();

        // Type some more
        $editor->type('And this is third.');

        // Output: Content before Saving
        self::assertEquals(' This is the first sentence. This is second. And this is third.', $editor->getContent());

        // Restoring to last saved state
        $editor->restore($saved);

        self::assertEquals(' This is the first sentence. This is second.', $editor->getContent());
    }
}
