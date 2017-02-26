<?php

namespace designPatternsForHumans\structural\Proxy;


class Security {

  protected $door;

  public function __construct(Door $door) {
    $this->door = $door;
  }

  public function open($password) {
    if ($this->authenticate($password)) {
      $this->door->open();
      echo 'Access granted!' . PHP_EOL;
    } else {
      echo "Big no! It ain't possible!" . PHP_EOL;
    }
  }

  // In the code examples this is public, but there is no real reason
  // why this method should be available to anything except this class.
  private function authenticate($password) {
    return $password === '$ecr@t';
  }

  public function close() {
    $this->door->close();
  }


}