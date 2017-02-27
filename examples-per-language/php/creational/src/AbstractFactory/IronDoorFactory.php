<?php

namespace designPatternsForHumans\creational\AbstractFactory;


class IronDoorFactory implements DoorFactory
{

    public function makeDoor()
    {
        return new IronDoor();
    }

    public function makeFittingExpert()
    {
        return new Welder();
    }
}
