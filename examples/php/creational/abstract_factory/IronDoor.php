<?php

namespace design_patterns\creational\abstract_factory;

class IronDoor implements Door
{
    public function getDescription(): string
    {
        return 'I am an iron door';
    }
}
