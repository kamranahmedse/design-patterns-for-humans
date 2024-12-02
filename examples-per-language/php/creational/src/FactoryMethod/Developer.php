<?php

namespace designPatternsForHumans\creational\FactoryMethod;


class Developer implements Interviewer
{

    public function askQuestions()
    {
        echo 'Asking about Design Patterns!' . PHP_EOL;
    }
}
