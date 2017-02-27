<?php

use designPatternsForHumans\behavioral\Observer\JobPost;
use designPatternsForHumans\behavioral\Observer\JobPostings;
use designPatternsForHumans\behavioral\Observer\JobSeeker;

require_once __DIR__ . '/autoload.php';

$john = new JobSeeker('John Doe');
$jane = new JobSeeker('Jane Doe');

$jobPostings = new JobPostings();
$jobPostings->attach($john);
$jobPostings->attach($jane);

$jobPostings->add(new JobPost('Software Engineer'));
