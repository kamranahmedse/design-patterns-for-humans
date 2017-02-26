<?php

namespace designPatternsForHumans\structural\Decorator;


class WhipCoffee implements Coffee {

  /** @var  Coffee */
  protected $coffee;

  public function __construct(Coffee $coffee) {
    $this->coffee = $coffee;
  }

  public function getCost() {
    return $this->coffee->getCost() + 5;
  }

  public function getDescription() {
    return $this->coffee->getDescription() . ', whip';
  }
}