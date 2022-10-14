<?php

namespace design_patterns\command;

class Bulb
{
    public function turnOn(): string
    {
        return "Bulb has been lit!";
    }

    public function turnOff(): string
    {
        return "Darkness!";
    }
}
