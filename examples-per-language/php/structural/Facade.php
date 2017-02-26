<?php

use designPatternsForHumans\structural\Facade\Computer;
use designPatternsForHumans\structural\Facade\ComputerFacade;

require_once __DIR__ . '/autoload.php';

$computer = new ComputerFacade(new Computer());

$computer->turnOn();
$computer->turnOff();