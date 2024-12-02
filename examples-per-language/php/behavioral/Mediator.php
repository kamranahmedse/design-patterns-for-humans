<?php

use designPatternsForHumans\behavioral\Mediator\ChatRoom;
use designPatternsForHumans\behavioral\Mediator\User;

require_once __DIR__ . '/autoload.php';

$mediator = new ChatRoom();

$john = new User('John Doe', $mediator);
$jane = new User('Jane Doe', $mediator);

$john->send('Hi there!');
$jane->send('Hey!');
