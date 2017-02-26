<?php

namespace designPatternsForHumans\structural\Bridge;

class About implements WebPage
{

    protected $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getContent()
    {
        return 'About page in ' . $this->theme->getColor();
    }
}