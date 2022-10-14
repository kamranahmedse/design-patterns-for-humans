<?php

namespace design_patterns\structural\bridge;

class Careers implements WebPage
{
    private Theme $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getContent(): string
    {
        return "Careers page in " . $this->theme->getColor();
    }
}
