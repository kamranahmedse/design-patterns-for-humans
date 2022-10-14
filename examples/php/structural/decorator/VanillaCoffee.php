<?php

namespace design_patterns\structural\decorator;

class VanillaCoffee implements Coffee
{
    private Coffee $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost(): float
    {
        return $this->coffee->getCost() + 3;
    }

    public function getDescription(): string
    {
        return $this->coffee->getDescription() . ', vanilla';
    }
}
