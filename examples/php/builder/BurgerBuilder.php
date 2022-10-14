<?php

namespace design_patterns\builder;

class BurgerBuilder
{
    public int $size;

    public bool $cheese = false;
    public bool $pepperoni = false;
    public bool $lettuce = false;
    public bool $tomato = false;

    public function __construct(int $size)
    {
        $this->size = $size;
    }

    public function addPepperoni(): BurgerBuilder
    {
        $this->pepperoni = true;
        return $this;
    }

    public function addLettuce(): BurgerBuilder
    {
        $this->lettuce = true;
        return $this;
    }

    public function addCheese(): BurgerBuilder
    {
        $this->cheese = true;
        return $this;
    }

    public function addTomato(): BurgerBuilder
    {
        $this->tomato = true;
        return $this;
    }

    public function build(): Builder
    {
        return new Builder($this);
    }
}
