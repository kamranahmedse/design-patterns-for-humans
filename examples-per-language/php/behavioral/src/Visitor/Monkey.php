<?php

namespace designPatternsForHumans\behavioral\Visitor;


class Monkey implements Animal
{

    public function accept(AnimalOperation $operation)
    {
        $operation->visitMonkey($this);
    }

    public function shout()
    {
        echo 'Ooh oo Aa aa!' . PHP_EOL;
    }
}
