<?php

namespace design_patterns\creational\abstract_factory;

class Welder implements DoorFittingExpert
{
    public function getDescription(): string
    {
        return 'I can only fit iron doors';
    }
}
