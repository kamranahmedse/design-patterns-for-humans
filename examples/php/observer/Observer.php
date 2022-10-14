<?php

namespace design_patterns\observer;

interface Observer
{
    public function update(JobPost $jobPost): void;
}
