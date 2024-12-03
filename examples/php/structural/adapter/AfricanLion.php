<?php

namespace design_patterns\structural\adapter;

class AfricanLion implements Lion
{
    public function roar(): string
    {
        return 'African Lion: Roar!';
    }
}
