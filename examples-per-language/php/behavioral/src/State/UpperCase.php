<?php

namespace designPatternsForHumans\behavioral\State;


class UpperCase implements WritingState
{

    public function write($words)
    {
        echo strtoupper($words) . PHP_EOL;
    }
}
