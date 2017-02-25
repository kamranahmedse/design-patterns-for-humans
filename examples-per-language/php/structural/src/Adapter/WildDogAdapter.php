<?php

namespace designPatternsForHumans\structural\Adapter;


class WildDogAdapter implements Lion {

  protected $dog;

  public function __construct( WildDog $dog) {
    $this->dog = $dog;
  }

  public function roar() {
    $this->dog->bark();
  }
}