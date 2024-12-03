<?php

namespace design_patterns\behavioral\strategy;

interface SortStrategy
{
    public function sort(array $dataset): string;
}
