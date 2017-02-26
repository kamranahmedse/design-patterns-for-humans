<?php

namespace designPatternsForHumans\structural\Bridge;

class Careers implements WebPage
{

    protected $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getContent()
    {
        return 'Careers page in ' . $this->theme->getColor();
    }
}