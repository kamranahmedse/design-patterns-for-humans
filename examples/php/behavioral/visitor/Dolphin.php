<?php

namespace design_patterns\behavioral\visitor;

class Dolphin implements Animal
{
    public function speak(): string
    {
        return 'Tuut tutt tuutt!';
    }

    public function accept(AnimalOperation $operation): string
    {
        return $operation->visitDolphin($this);
    }
}
