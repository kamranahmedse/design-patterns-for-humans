<?php

namespace design_patterns\flyweight;

class TeaMaker
{
    private array $availableTea = [];

    public function make(string $preference)
    {
        if (empty($this->availableTea[$preference])) {
            $this->availableTea[$preference] = new KarakTea();
        }

        return $this->availableTea[$preference];
    }
}
