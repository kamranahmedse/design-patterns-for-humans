<?php

require_once __DIR__ . '/autoload.php';

use designPatternsForHumans\behavioral\Command\Bulb;
use designPatternsForHumans\behavioral\Command\RemoteControl;
use designPatternsForHumans\behavioral\Command\TurnOff;
use designPatternsForHumans\behavioral\Command\TurnOn;

$bulb = new Bulb();

$turnOn = new TurnOn($bulb);
$turnOff = new TurnOff($bulb);

$remote = new RemoteControl();
$remote->submit($turnOn);
$remote->submit($turnOff);
