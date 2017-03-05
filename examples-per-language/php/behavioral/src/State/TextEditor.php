<?php

namespace designPatternsForHumans\behavioral\State;


class TextEditor
{

    protected $state;

    public function __construct(WritingState $state)
    {
        $this->state = $state;
    }

    public function setState(WritingState $state)
    {
        $this->state = $state;
    }

    public function type($words)
    {
        $this->state->write($words);
    }

}
