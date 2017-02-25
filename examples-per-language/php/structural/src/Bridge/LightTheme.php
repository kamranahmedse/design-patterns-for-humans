<?php

namespace designPatternsForHumans\structural\Bridge;


class LightTheme implements Theme {

  public function getColor() {
    return 'Off white';
  }
}