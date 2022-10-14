<?php

namespace design_patterns\behavioral\strategy;

class BubbleSortStrategy implements SortStrategy
{
    public function sort(array $dataset): string
    {
        // Do sorting
        return "Sorting using bubble sort";
    }
}
