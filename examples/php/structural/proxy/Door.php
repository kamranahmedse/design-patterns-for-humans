<?php

namespace design_patterns\structural\proxy;

interface Door
{
    public function open(): string;
    public function close(): string;
}
