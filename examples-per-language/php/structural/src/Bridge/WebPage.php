<?php

namespace designPatternsForHumans\structural\Bridge;


interface WebPage {

  public function __construct(Theme $theme);
  public function getContent();

}