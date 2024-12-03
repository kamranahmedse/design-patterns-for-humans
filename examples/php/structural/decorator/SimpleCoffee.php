<?php

namespace design_patterns\structural\decorator;

class SimpleCoffee implements Coffee
{
    public function getCost(): float
    {
        return 10;
    }

    public function getDescription(): string
    {
        return 'Simple Coffee';
    }
}
