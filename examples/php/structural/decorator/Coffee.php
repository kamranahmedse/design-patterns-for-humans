<?php

namespace design_patterns\structural\decorator;

interface Coffee
{
    public function getCost(): float;
    public function getDescription(): string;
}
