<?php

namespace design_patterns\bridge;

class AquaTheme implements Theme
{
    public function getColor(): string
    {
        return 'Light blue';
    }
}
