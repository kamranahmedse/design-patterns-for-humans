<?php

namespace designPatternsForHumans\behavioral\Observer;


class JobPost
{
    protected $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }


}
