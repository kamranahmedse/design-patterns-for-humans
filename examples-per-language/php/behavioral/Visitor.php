<?php

use designPatternsForHumans\behavioral\Visitor\Dolphin;
use designPatternsForHumans\behavioral\Visitor\Jump;
use designPatternsForHumans\behavioral\Visitor\Lion;
use designPatternsForHumans\behavioral\Visitor\Monkey;
use designPatternsForHumans\behavioral\Visitor\Speak;

require_once __DIR__ . '/autoload.php';

$monkey = new Monkey();
$lion = new Lion();
$dolphin = new Dolphin();

// This is the visitor.
$speak = new Speak();

$monkey->accept($speak);
$lion->accept($speak);
$dolphin->accept($speak);

// Using the Visitor pattern it becomes easy to 'add' new functionality to
// the animals. Declare functionality in a class that implements Visitor.

$jump = new Jump();

$monkey->accept($jump);
$lion->accept($jump);
$dolphin->accept($jump);