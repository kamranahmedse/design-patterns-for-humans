<?php

namespace design_patterns\behavioral\state;

class LowerCase implements WritingState
{
    public function write(string $words): string
    {
        return strtolower($words);
    }
}
