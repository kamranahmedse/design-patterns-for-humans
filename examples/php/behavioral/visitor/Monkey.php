<?php

namespace design_patterns\behavioral\visitor;

class Monkey implements Animal
{
    public function shout(): string
    {
        return 'Ooh oo aa aa!';
    }

    public function accept(AnimalOperation $operation): string
    {
        return $operation->visitMonkey($this);
    }
}
