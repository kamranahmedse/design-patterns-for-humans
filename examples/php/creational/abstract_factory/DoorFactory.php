<?php

namespace design_patterns\creational\abstract_factory;

interface DoorFactory
{
    public function makeDoor(): Door;

    public function makeFittingExpert(): DoorFittingExpert;
}
