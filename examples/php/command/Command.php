<?php

namespace design_patterns\command;

interface Command
{
    public function execute(): string;
    public function undo(): string;
    public function redo(): string;
}
