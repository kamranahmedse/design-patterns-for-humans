<?php

namespace design_patterns\creational\factory_method;

class Developer implements Interviewer
{
    public function askQuestions(): string
    {
        return 'Asking about design patterns.';
    }
}
