<?php

namespace design_patterns\behavioral\strategy;

class QuickSortStrategy implements SortStrategy
{
    public function sort(array $dataset): string
    {
        // Do sorting
        return "Sorting using quick sort";
    }
}
