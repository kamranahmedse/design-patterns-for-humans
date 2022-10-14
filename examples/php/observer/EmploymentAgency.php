<?php

namespace design_patterns\observer;

class EmploymentAgency implements Observable
{
    private array $observers = [];

    public function notify(JobPost $jobPost): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($jobPost);
        }
    }

    public function attach(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer): void
    {
        $key = array_search($observer, $this->observers, true);
        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }
}
