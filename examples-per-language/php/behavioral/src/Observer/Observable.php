<?php

namespace designPatternsForHumans\behavioral\Observer;


interface Observable
{
    public function notify(JobPost $jobPosting);
    public function attach(Observer $observer);
    public function add(JobPost $jobPosting);
}
