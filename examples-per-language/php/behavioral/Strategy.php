<?php

use designPatternsForHumans\behavioral\Strategy\BubbleSortStrategy;
use designPatternsForHumans\behavioral\Strategy\QuickSortStrategy;
use designPatternsForHumans\behavioral\Strategy\Sorter;

require_once __DIR__ . '/autoload.php';

$dataset = [1, 5, 2, 6, 3];

$sorter = new Sorter(new BubbleSortStrategy());
$sorter->sort($dataset);

$sorter = new Sorter(new QuickSortStrategy());
$sorter->sort($dataset);
