<?php

namespace designPatternsForHumans\behavioral\Visitor;


class Jump implements AnimalOperation
{

    public function visitMonkey(Monkey $monkey)
    {
        echo 'Jumped 20 feet high! On the tree!' . PHP_EOL;
    }

    public function visitLion(Lion $lion)
    {
        echo 'Jumped 7 feet! Back on the ground' . PHP_EOL;
    }

    public function visitDolphin(Dolphin $dolphin)
    {
        echo 'Walked on water to demonstrate the upcoming end of the world!' . PHP_EOL;
    }
}
