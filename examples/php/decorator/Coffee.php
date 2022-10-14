<?php

namespace design_patterns\decorator;

interface Coffee
{
    public function getCost(): float;
    public function getDescription(): string;
}
