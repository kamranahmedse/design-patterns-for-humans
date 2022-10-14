<?php

namespace design_patterns\structural\adapter;

class Hunter
{
    public function hunt(Lion $lion): string
    {
        return $lion->roar();
    }
}
