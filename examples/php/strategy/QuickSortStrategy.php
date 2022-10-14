<?php

namespace design_patterns\strategy;

class QuickSortStrategy implements SortStrategy
{
    public function sort(array $dataset): string
    {
        // Do sorting
        return "Sorting using quick sort";
    }
}
