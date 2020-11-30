<?php

namespace designPatternsForHumans\behavioral\Observer;


interface Observer
{
    public function onJobPosted(JobPost $job);
}
