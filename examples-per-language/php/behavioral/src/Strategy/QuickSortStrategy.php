<?php

namespace designPatternsForHumans\behavioral\Strategy;


class QuickSortStrategy implements SortStrategy
{

    public function sort(array $dataset)
    {
        echo 'Sorting using QuickSort' . PHP_EOL;

        // Do your sorting here.

        return $dataset;
    }
}
