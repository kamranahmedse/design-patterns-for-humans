<?php

namespace design_patterns\bridge;

class About implements WebPage
{
    private Theme $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getContent(): string
    {
        return "About page in " . $this->theme->getColor();
    }
}
