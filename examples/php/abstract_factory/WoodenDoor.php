<?php

namespace design_patterns\abstract_factory;

class WoodenDoor implements Door
{
    public function getDescription(): string
    {
        return 'I am a wooden door';
    }
}
