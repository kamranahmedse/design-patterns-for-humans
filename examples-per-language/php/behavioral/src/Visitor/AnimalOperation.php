<?php

namespace designPatternsForHumans\behavioral\Visitor;


interface AnimalOperation
{
    // There are the visitors.
    public function visitMonkey(Monkey $monkey);
    public function visitLion(Lion $lion);
    public function visitDolphin(Dolphin $dolphin);
}
