<?php

namespace design_patterns\abstract_factory;

class IronDoor implements Door
{
    public function getDescription(): string
    {
        return 'I am an iron door';
    }
}
