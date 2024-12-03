<?php

namespace design_patterns\structural\bridge;

class LightTheme implements Theme
{
    public function getColor(): string
    {
        return 'Off White';
    }
}
