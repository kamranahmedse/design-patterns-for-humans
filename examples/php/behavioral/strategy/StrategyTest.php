<?php

namespace design_patterns\behavioral\strategy;

use PHPUnit\Framework\TestCase;

/*
$dataset = [1, 5, 4, 3, 2, 8];

$sorter = new Sorter(new BubbleSortStrategy());
$sorter->sort($dataset); // Output : Sorting using bubble sort

$sorter = new Sorter(new QuickSortStrategy());
$sorter->sort($dataset); // Output : Sorting using quick sort
*/

class StrategyTest extends TestCase
{
    public function test01(): void
    {
        $dataset = [1, 5, 4, 3, 2, 8];

        $sorter = new Sorter(new BubbleSortStrategy());
        self::assertEquals('Sorting using bubble sort', $sorter->sort($dataset));

        $sorter = new Sorter(new QuickSortStrategy());
        self::assertEquals('Sorting using quick sort', $sorter->sort($dataset));
    }
}
