<?php

namespace design_patterns\creational\factory_method;

abstract class HiringManager
{
    // Factory method
    abstract protected function makeInterviewer(): Interviewer;

    public function takeInterview(): string
    {
        return $this->makeInterviewer()->askQuestions();
    }
}
