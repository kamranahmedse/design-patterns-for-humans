<?php

namespace designPatternsForHumans\behavioral\State;


class DefaultState implements WritingState
{

    public function write($words)
    {
        echo $words . PHP_EOL;
    }
}
