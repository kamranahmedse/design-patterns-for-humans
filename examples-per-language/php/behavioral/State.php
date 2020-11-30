<?php

use designPatternsForHumans\behavioral\State\DefaultState;
use designPatternsForHumans\behavioral\State\LowerCase;
use designPatternsForHumans\behavioral\State\TextEditor;
use designPatternsForHumans\behavioral\State\UpperCase;

require_once __DIR__ . '/autoload.php';

$editor = new TextEditor(new DefaultState());

$editor->type('First line');

$editor->setState(new UpperCase());

$editor->type('Second line');
$editor->type('Third line');

$editor->setState(new LowerCase());

$editor->type('Fourth line');
$editor->type('Fifth line');
