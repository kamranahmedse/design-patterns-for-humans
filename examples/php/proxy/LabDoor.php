<?php

namespace design_patterns\proxy;

class LabDoor implements Door
{
    public function open(): string
    {
        return "Opening lab door";
    }

    public function close(): string
    {
        return "Closing lab door";
    }
}
