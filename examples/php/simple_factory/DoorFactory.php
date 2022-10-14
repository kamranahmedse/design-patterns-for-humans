<?php

namespace design_patterns\simple_factory;

class DoorFactory
{
    public static function makeDoor(float $width, float $height): Door
    {
        return new WoodenDoor($width, $height);
    }
}
