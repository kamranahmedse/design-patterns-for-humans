<?php

namespace design_patterns\adapter;

class AsianLion implements Lion
{
    public function roar(): string
    {
        return 'Asian Lion: Roar!';
    }
}
