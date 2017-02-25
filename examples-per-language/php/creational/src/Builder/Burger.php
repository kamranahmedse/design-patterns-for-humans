<?php

namespace designPatternsForHumans\creational\Builder;


class Burger {

  protected $size;
  protected $cheese = FALSE;
  protected $pepperoni = FALSE;
  protected $lettuce = FALSE;
  protected $tomato = FALSE;

  public function __construct(BurgerBuilder $builder) {
    $this->size = $builder->size;
    $this->cheese = $builder->cheese;
    $this->pepperoni = $builder->pepperoni;
    $this->lettuce = $builder->lettuce;
    $this->tomato = $builder->tomato;
  }
}