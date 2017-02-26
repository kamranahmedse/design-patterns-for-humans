<?php

namespace designPatternsForHumans\creational\FactoryMethod;


class CommunityExecutive implements Interviewer
{

    public function askQuestions()
    {
        echo 'Asking about community building!' . PHP_EOL;
    }
}