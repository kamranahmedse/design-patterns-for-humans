<?php

namespace design_patterns\strategy;

interface SortStrategy
{
    public function sort(array $dataset): string;
}
