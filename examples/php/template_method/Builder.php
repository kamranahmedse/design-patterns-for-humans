<?php

namespace design_patterns\template_method;

abstract class Builder
{
    // Template method
    final public function build(): string
    {
        return sprintf("%s\n%s\n%s\n%s",
            $this->test(),
            $this->lint(),
            $this->assemble(),
            $this->deploy()
        );
    }

    abstract public function test(): string;
    abstract public function lint(): string;
    abstract public function assemble(): string;
    abstract public function deploy(): string;
}
