<?php

namespace design_patterns\visitor;

interface Animal
{
    public function accept(AnimalOperation $operation): string;
}
