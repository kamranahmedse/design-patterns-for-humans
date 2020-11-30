<?php

namespace designPatternsForHumans\behavioral\Visitor;


class Dolphin implements Animal
{

    public function accept(AnimalOperation $operation)
    {
        $operation->visitDolphin($this);
    }

    public function speak()
    {
        echo '[High pitched ramblings about the end of the world].' . PHP_EOL;
    }
}
