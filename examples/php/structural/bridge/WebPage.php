<?php

namespace design_patterns\structural\bridge;

interface WebPage
{
    public function __construct(Theme $theme);
    public function getContent(): string;
}
