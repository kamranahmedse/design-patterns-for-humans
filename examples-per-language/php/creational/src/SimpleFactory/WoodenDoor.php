<?php

namespace designPatternsForHumans\creational\SimpleFactory;


class WoodenDoor implements Door {

  protected $width;
  protected $height;


  public function __construct($width, $height) {
    $this->width = $width;
    $this->height = $height;
  }

  public function getWidth() {
    return $this->width;
  }

  public function getHeight() {
    return $this->height;
  }
}