<?php

namespace designPatternsForHumans\behavioral\Visitor;


interface Animal
{
    public function accept(AnimalOperation $operation);
}
