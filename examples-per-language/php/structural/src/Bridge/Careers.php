<?php

namespace designPatternsForHumans\structural\Bridge;

class Careers implements WebPage {

  protected $theme;

  public function __construct(\designPatternsForHumans\structural\Bridge\Theme $theme) {
    $this->theme = $theme;
  }

  public function getContent() {
    return 'Careers page in ' . $this->theme->getColor();
  }
}