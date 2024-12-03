<?php

namespace design_patterns\behavioral\command;

class RemoteControl
{
    public function submit(Command $command): string
    {
        return $command->execute();
    }
}
