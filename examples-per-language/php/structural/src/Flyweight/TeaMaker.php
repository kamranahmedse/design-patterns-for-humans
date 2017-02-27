<?php

namespace designPatternsForHumans\structural\Flyweight;


class TeaMaker
{

    protected $availableTea = [];

    public function make($preference)
    {
        if (empty($this->availableTea[$preference])) {
            $this->availableTea[$preference] = new KarakTea();
            echo 'The tea ' . $preference . ' was not available and was freshly made' . PHP_EOL;
        } else {
            echo 'The tea ' . $preference . ' was already made, so we served that' . PHP_EOL;
        }

        return $this->availableTea[$preference];
    }

}
