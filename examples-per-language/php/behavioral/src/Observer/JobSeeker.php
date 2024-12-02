<?php

namespace designPatternsForHumans\behavioral\Observer;


class JobSeeker implements Observer
{

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function onJobPosted(JobPost $job)
    {
        echo 'Hi ', $this->name . '! New job posted: ' . $job->getTitle() . PHP_EOL;
    }
}
