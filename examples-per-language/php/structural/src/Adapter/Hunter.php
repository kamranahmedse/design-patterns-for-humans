<?php

namespace designPatternsForHumans\structural\Adapter;


class Hunter
{

    public function hunt(Lion $lion)
    {
        echo "I'm hunting a " . get_class($lion) . PHP_EOL;
    }

}