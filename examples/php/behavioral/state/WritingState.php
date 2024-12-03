<?php

namespace design_patterns\behavioral\state;

interface WritingState
{
    public function write(string $words): string;
}
