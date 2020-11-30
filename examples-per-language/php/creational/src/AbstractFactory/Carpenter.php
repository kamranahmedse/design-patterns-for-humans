<?php

namespace designPatternsForHumans\creational\AbstractFactory;


class Carpenter implements DoorFittingExpert
{

    public function getDescription()
    {
        echo 'I can only fit wooden doors' . PHP_EOL;
    }
}
