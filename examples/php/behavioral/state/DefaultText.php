<?php

namespace design_patterns\behavioral\state;

class DefaultText implements WritingState
{
    public function write(string $words): string
    {
        return $words;
    }
}
