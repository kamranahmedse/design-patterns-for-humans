<?php

namespace design_patterns\state;

class UpperCase implements WritingState
{
    public function write(string $words): string
    {
        return strtoupper($words);
    }
}
