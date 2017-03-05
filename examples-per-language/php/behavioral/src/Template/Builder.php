<?php

namespace designPatternsForHumans\behavioral\Template;


abstract class Builder
{
    // This is the template method.
    final public function build() {
        $this->test();
        $this->lint();
        $this->assemble();
        $this->deploy();
    }

    abstract public function test();
    abstract public function lint();
    abstract public function assemble();
    abstract public function deploy();
}
