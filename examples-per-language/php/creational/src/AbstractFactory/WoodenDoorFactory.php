<?php

namespace designPatternsForHumans\creational\AbstractFactory;


class WoodenDoorFactory implements DoorFactory
{

    public function makeDoor()
    {
        return new WoodenDoor();
    }

    public function makeFittingExpert()
    {
        return new Carpenter();
    }
}
