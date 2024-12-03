<?php

namespace design_patterns\behavioral\visitor;

class Speak implements AnimalOperation
{
    public function visitMonkey(Monkey $monkey): string
    {
        return $monkey->shout();
    }

    public function visitLion(Lion $lion): string
    {
        return $lion->roar();
    }

    public function visitDolphin(Dolphin $dolphin): string
    {
        return $dolphin->speak();
    }
}
