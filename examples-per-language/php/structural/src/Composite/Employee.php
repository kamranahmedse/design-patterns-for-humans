<?php

namespace designPatternsForHumans\structural\Composite;


interface Employee {

  public function __construct($name, $salary);
  public function getName();
  public function setSalary($salary);
  public function getSalary();
  public function getRoles();
}