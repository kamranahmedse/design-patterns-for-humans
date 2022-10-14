<?php

namespace design_patterns\behavioral\visitor;

interface Animal
{
    public function accept(AnimalOperation $operation): string;
}
