<?php

namespace designPatternsForHumans\creational\AbstractFactory;


class IronDoor implements Door {

  public function getDescription() {
    echo 'I am an Iron Door!' . PHP_EOL;
  }
}