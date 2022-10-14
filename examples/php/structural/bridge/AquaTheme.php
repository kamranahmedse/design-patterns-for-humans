<?php

namespace design_patterns\structural\bridge;

class AquaTheme implements Theme
{
    public function getColor(): string
    {
        return 'Light blue';
    }
}
