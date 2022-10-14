<?php

namespace design_patterns\state;

class TextEditor
{
    private WritingState $state;

    public function __construct(WritingState $state)
    {
        $this->state = $state;
    }

    public function setState(WritingState $state): void
    {
        $this->state = $state;
    }

    public function type(string $words): string
    {
        return $this->state->write($words);
    }
}
