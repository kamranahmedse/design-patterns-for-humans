<?php

namespace designPatternsForHumans\creational\FactoryMethod;


abstract class HiringManager
{

    // This is the factory method.
    abstract public function makeInterviewer();

    public function takeInterview()
    {

        /** @var Interviewer $interviewer */
        $interviewer = $this->makeInterviewer();
        $interviewer->askQuestions();
    }
}
