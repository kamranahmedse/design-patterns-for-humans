<?php

namespace designPatternsForHumans\structural\Facade;


class Computer
{

    public function getElectricShock()
    {
        echo 'Ouch!' . PHP_EOL;
    }

    public function makeSound()
    {
        echo 'Beep, Beep' . PHP_EOL;
    }

    public function showLoadingScreen()
    {
        echo 'Loading ...' . PHP_EOL;
    }

    public function bam()
    {
        echo 'Ready to be used!' . PHP_EOL;
    }

    public function closeEverything()
    {
        echo 'Bup bup bup buzzzzzz' . PHP_EOL;
    }

    public function pullCurrent()
    {
        echo 'Haah!' . PHP_EOL;
    }

    public function sooth()
    {
        echo 'zzzzzzz' . PHP_EOL;
    }

}