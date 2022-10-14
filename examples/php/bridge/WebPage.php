<?php

namespace design_patterns\bridge;

interface WebPage
{
    public function __construct(Theme $theme);
    public function getContent(): string;
}
