<?php

namespace designPatternsForHumans\behavioral\Command;


// This is the receiver, it has the implementation of the actions we want to perform.
class Bulb
{
    public function turnOn()
    {
        echo 'Bulb has been lit!' . PHP_EOL;
    }

    public function turnOff()
    {
        echo 'Darkness!' . PHP_EOL;
    }

}
