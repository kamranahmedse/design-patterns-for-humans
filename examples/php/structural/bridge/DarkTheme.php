<?php

namespace design_patterns\structural\bridge;

class DarkTheme implements Theme
{
    public function getColor(): string
    {
        return 'Dark Black';
    }
}
