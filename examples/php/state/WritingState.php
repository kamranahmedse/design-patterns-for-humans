<?php

namespace design_patterns\state;

interface WritingState
{
    public function write(string $words): string;
}
