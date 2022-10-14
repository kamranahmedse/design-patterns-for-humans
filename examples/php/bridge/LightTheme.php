<?php

namespace design_patterns\bridge;

class LightTheme implements Theme
{
    public function getColor(): string
    {
        return 'Off White';
    }
}
