<?php

namespace designPatternsForHumans\behavioral\State;


class LowerCase implements WritingState
{

    public function write($words)
    {
        echo strtolower($words) . PHP_EOL;
    }
}
