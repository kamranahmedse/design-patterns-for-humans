<?php

namespace design_patterns\behavioral\observer;

interface Observable
{
    public function attach(Observer $observer): void;
    public function detach(Observer $observer): void;
    public function notify(JobPost $jobPost): void;
}
