<?php

namespace designPatternsForHumans\behavioral\Observer;


class JobPostings implements Observable
{
    protected $observers = [];

    public function notify(JobPost $jobPosting)
    {
        /** @var Observer $observer */
        foreach ($this->observers as $observer) {
            $observer->onJobPosted($jobPosting);
        }
    }

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function add(JobPost $jobPosting)
    {
        $this->notify($jobPosting);
    }
}
