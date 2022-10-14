<?php

namespace design_patterns\chain_of_responsibility;

class Paypal extends Account
{
    protected float $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}
