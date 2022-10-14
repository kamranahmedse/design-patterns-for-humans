<?php

namespace design_patterns\observer;

class JobSeeker implements Observer
{
    private string $name;
    private string $lastNotice;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function update(JobPost $jobPost): void
    {
        // Do something with the job posting
        $this->lastNotice = 'Hi ' . $this->name . '! New job posted: ' . $jobPost->getTitle();
    }

    public function getLastNotice(): string
    {
        return $this->lastNotice;
    }
}
