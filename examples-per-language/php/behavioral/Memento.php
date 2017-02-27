<?php

use designPatternsForHumans\behavioral\Memento\Editor;

require_once __DIR__ . '/autoload.php';

$editor = new Editor();

$editor->type('This is the first sentence' . PHP_EOL);
$editor->type('This is the second sentence' . PHP_EOL);

$saved = $editor->save();

$editor->type('And this is the third one.' . PHP_EOL);

echo $editor->getContent();

$editor->restore($saved);
echo 'Restored $editor.' . PHP_EOL;
echo $editor->getContent();
