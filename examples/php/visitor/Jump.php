<?php

namespace design_patterns\visitor;

class Jump implements AnimalOperation
{
    public function visitMonkey(Monkey $monkey): string
    {
        return 'Jumped 20 feet high! on to the tree!';
    }

    public function visitLion(Lion $lion): string
    {
        return 'Jumped 7 feet! Back on the ground!';
    }

    public function visitDolphin(Dolphin $dolphin): string
    {
        return 'Walked on water a little and disappeared';
    }
}
