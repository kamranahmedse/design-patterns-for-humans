<?php

namespace designPatternsForHumans\behavioral\Strategy;


class BubbleSortStrategy implements SortStrategy
{

    public function sort(array $dataset)
    {
        echo 'Sorting using BubbleSort' . PHP_EOL ;

        // Do your sorting here.

        return $dataset;
    }
}
