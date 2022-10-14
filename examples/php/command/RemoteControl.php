<?php

namespace design_patterns\command;

class RemoteControl
{
    public function submit(Command $command): string
    {
        return $command->execute();
    }
}
