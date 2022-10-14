<?php

namespace design_patterns\visitor;

class Lion implements Animal
{
    public function roar(): string
    {
        return 'Roaaar!';
    }

    public function accept(AnimalOperation $operation): string
    {
        return $operation->visitLion($this);
    }
}
