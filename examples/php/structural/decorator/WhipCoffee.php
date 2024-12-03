<?php

namespace design_patterns\structural\decorator;

class WhipCoffee implements Coffee
{
    private Coffee $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost(): float
    {
        return $this->coffee->getCost() + 5;
    }

    public function getDescription(): string
    {
        return $this->coffee->getDescription() . ', whip';
    }
}
