<?php

namespace designPatternsForHumans\behavioral\Chain_Of_Responsibility;


class Bank extends Account
{
    // In the example the balance property is redefined, but that is not
    // necessary, since we extend Account, which has that property.


    public function __construct($balance)
    {
        $this->balance = $balance;
    }
}
