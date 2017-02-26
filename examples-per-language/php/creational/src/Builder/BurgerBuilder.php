<?php

namespace designPatternsForHumans\creational\Builder;


class BurgerBuilder
{

    public $size;
    public $cheese = false;
    public $pepperoni = false;
    public $lettuce = false;
    public $tomato = false;

    public function __construct($size)
    {
        $this->size = $size;
    }

    public function addCheese()
    {
        $this->cheese = true;
        return $this;
    }

    public function addPepperoni()
    {
        $this->pepperoni = true;
        return $this;
    }

    public function addLettuce()
    {
        $this->lettuce = true;
        return $this;
    }

    public function addTomato()
    {
        $this->tomato = true;
        return $this;
    }

    // Finishes the build process.
    public function build()
    {
        return new Burger($this);
    }

}