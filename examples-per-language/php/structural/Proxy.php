<?php

use designPatternsForHumans\structural\Proxy\LabDoor;
use designPatternsForHumans\structural\Proxy\Security;

require_once __DIR__ . '/autoload.php';

$door = new Security(new LabDoor());
$door->open('invalid');

$door->open('$ecr@t');
$door->close();