<?php

namespace designPatternsForHumans\behavioral\Memento;


class EditorMemento
{
    protected $content;

    public function __construct($content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

}
