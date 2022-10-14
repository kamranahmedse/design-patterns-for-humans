<?php

namespace design_patterns\state;

class LowerCase implements WritingState
{
    public function write(string $words): string
    {
        return strtolower($words);
    }
}
