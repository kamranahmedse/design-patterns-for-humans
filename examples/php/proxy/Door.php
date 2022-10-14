<?php

namespace design_patterns\proxy;

interface Door
{
    public function open(): string;
    public function close(): string;
}
