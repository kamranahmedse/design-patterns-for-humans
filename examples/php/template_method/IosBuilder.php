<?php

namespace design_patterns\template_method;

class IosBuilder extends Builder
{
    public function test(): string
    {
        return 'Running ios tests';
    }

    public function lint(): string
    {
        return 'Linting the ios code';
    }

    public function assemble(): string
    {
        return 'Assembling the ios build';
    }

    public function deploy(): string
    {
        return 'Deploying ios build to server';
    }
}
