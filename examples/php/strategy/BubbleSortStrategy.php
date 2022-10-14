<?php

namespace design_patterns\strategy;

class BubbleSortStrategy implements SortStrategy
{
    public function sort(array $dataset): string
    {
        // Do sorting
        return "Sorting using bubble sort";
    }
}
