<?php

namespace design_patterns\decorator;

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
