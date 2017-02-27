<?php

spl_autoload_register(function($className) {
  $explode = explode("\\", $className);
  $slice = array_slice($explode, -2, 2);
  require_once 'src' .  DIRECTORY_SEPARATOR . implode(DIRECTORY_SEPARATOR, $slice) . '.php';
});
