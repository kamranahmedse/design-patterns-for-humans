<?php

namespace designPatternsForHumans\structural\Decorator;


class MilkCoffee implements Coffee {

  /** @var  Coffee */
  protected $coffee;

  public function __construct(Coffee $coffee) {
    $this->coffee = $coffee;
  }

  public function getCost() {
    return $this->coffee->getCost() + 2;
  }

  public function getDescription() {
    return $this->coffee->getDescription() . ', milk';
  }
}