<?php

namespace design_patterns\iterator;

use PHPUnit\Framework\TestCase;

/*
$stationList = new StationList();

$stationList->addStation(new RadioStation(89));
$stationList->addStation(new RadioStation(101));
$stationList->addStation(new RadioStation(102));
$stationList->addStation(new RadioStation(103.2));

foreach($stationList as $station) {
    echo $station->getFrequency() . PHP_EOL;
}

$stationList->removeStation(new RadioStation(89)); // Will remove station 89
*/

class IteratorTest extends TestCase
{
    public function test01(): void
    {
        $stationList = new StationList();

        $stationList->addStation(new RadioStation(89));
        $stationList->addStation(new RadioStation(101));
        $stationList->addStation(new RadioStation(102));
        $stationList->addStation(new RadioStation(103.2));

        self::assertEquals(4, $stationList->count());

        $expect = [89, 101, 102, 103.2];
        foreach($stationList as $key => $station) {
            self::assertEquals($expect[$key], $station->getFrequency());
        }

        $stationList->removeStation(new RadioStation(89));
        self::assertEquals(3, $stationList->count());
    }
}
