<?php

namespace design_patterns\abstract_factory;

class Welder implements DoorFittingExpert
{
    public function getDescription(): string
    {
        return 'I can only fit iron doors';
    }
}
