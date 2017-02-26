<?php

use designPatternsForHumans\behavioral\Iterator\RadioStation;
use designPatternsForHumans\behavioral\Iterator\StationList;

require_once __DIR__ . '/autoload.php';

$stationList = new StationList();

$stationList->addStation(new RadioStation(89));
$stationList->addStation(new RadioStation(101));
$stationList->addStation(new RadioStation(102));
$stationList->addStation(new RadioStation(103.2));

/** @var RadioStation $station */
echo 'These are the known Radio Stations' . PHP_EOL;
foreach ($stationList as $station) {
    echo $station->getFrequency(). PHP_EOL;
}

$stationList->removeStation(new RadioStation(89));

// To prove the station was indeed removed, we iterate through the list again.
// Small caveat : Iterators need to be rewinded after beeing Iterated!
$stationList->rewind();

/** @var RadioStation $station */
echo 'These are the known Radio Stations' . PHP_EOL;
foreach ($stationList as $station) {
    echo $station->getFrequency(). PHP_EOL;
}

