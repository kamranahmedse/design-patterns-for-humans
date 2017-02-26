<?php

namespace designPatternsForHumans\behavioral\Command;

// This is the invoker, this will be used by client to interact.
class RemoteControl
{
    public function submit(Command $command)
    {
        $command->execute();
    }

}