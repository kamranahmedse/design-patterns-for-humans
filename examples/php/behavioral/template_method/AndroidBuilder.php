<?php

namespace design_patterns\behavioral\template_method;

class AndroidBuilder extends Builder
{
    public function test(): string
    {
        return 'Running android tests';
    }

    public function lint(): string
    {
        return 'Linting the android code';
    }

    public function assemble(): string
    {
        return 'Assembling the android build';
    }

    public function deploy(): string
    {
        return 'Deploying android build to server';
    }
}
