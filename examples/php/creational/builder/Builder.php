<?php

namespace design_patterns\creational\builder;

class Builder
{
    public int $size;

    public bool $cheese = false;
    public bool $pepperoni = false;
    public bool $lettuce = false;
    public bool $tomato = false;

    public function __construct(BurgerBuilder $builder)
    {
        $this->size = $builder->size;
        $this->cheese = $builder->cheese;
        $this->pepperoni = $builder->pepperoni;
        $this->lettuce = $builder->lettuce;
        $this->tomato = $builder->tomato;
    }
}
