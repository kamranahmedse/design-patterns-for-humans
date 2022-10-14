<?php

namespace design_patterns\behavioral\observer;

interface Observer
{
    public function update(JobPost $jobPost): void;
}
