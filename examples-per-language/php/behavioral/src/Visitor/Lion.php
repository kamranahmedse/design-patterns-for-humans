<?php

namespace designPatternsForHumans\behavioral\Visitor;


class Lion implements Animal
{

    public function accept(AnimalOperation $operation)
    {
        $operation->visitLion($this);
    }

    public function roar()
    {
        echo 'Roarrrrrr!' . PHP_EOL;
    }
}
