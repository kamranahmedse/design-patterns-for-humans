<?php

namespace design_patterns\bridge;

class DarkTheme implements Theme
{
    public function getColor(): string
    {
        return 'Dark Black';
    }
}
