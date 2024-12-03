<?php

namespace design_patterns\behavioral\command;

class TurnOn implements Command
{
    private Bulb $bulb;

    public function __construct(Bulb $bulb)
    {
        $this->bulb = $bulb;
    }

    public function execute(): string
    {
        return $this->bulb->turnOn();
    }

    public function undo(): string
    {
        return $this->bulb->turnOff();
    }

    public function redo(): string
    {
        return $this->execute();
    }
}
