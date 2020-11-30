<?php

namespace designPatternsForHumans\behavioral\Command;


interface Command
{
    public function execute();
    public function undo();
    public function redo();

}
