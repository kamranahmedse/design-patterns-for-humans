<?php

namespace design_patterns\adapter;

class Hunter
{
    public function hunt(Lion $lion): string
    {
        return $lion->roar();
    }
}
