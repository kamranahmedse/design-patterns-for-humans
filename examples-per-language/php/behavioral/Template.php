<?php

use designPatternsForHumans\behavioral\Template\AndroidBuilder;
use designPatternsForHumans\behavioral\Template\IosBuilder;

require_once __DIR__ . '/autoload.php';

$androidBuilder = new AndroidBuilder();
$androidBuilder->build();

$iosBuilder = new IosBuilder();
$iosBuilder->build();
