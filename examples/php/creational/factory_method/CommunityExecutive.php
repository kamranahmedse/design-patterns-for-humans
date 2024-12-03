<?php

namespace design_patterns\creational\factory_method;

class CommunityExecutive implements Interviewer
{
    public function askQuestions(): string
    {
        return 'Asking about community building.';
    }
}
