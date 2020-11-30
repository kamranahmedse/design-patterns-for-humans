<?php

use designPatternsForHumans\structural\Bridge\About;
use designPatternsForHumans\structural\Bridge\Careers;
use designPatternsForHumans\structural\Bridge\DarkTheme;

require_once __DIR__ . '/autoload.php';

$darkTheme = new DarkTheme();

$about = new About($darkTheme);
$careers = new Careers($darkTheme);

echo $about->getContent() . PHP_EOL;
echo $careers->getContent() . PHP_EOL;
