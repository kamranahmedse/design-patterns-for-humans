<?php

namespace design_patterns\observer;

use PHPUnit\Framework\TestCase;

/*
// Create subscribers
$johnDoe = new JobSeeker('John Doe');
$janeDoe = new JobSeeker('Jane Doe');

// Create publisher and attach subscribers
$jobPostings = new EmploymentAgency();
$jobPostings->attach($johnDoe);
$jobPostings->attach($janeDoe);

// Add a new job and see if subscribers get notified
$jobPostings->addJob(new JobPost('Software Engineer'));

// Output
// Hi John Doe! New job posted: Software Engineer
// Hi Jane Doe! New job posted: Software Engineer
*/

class ObserverTest extends TestCase
{
    public function test01(): void
    {
        // Create subscribers
        $johnDoe = new JobSeeker('John Doe');
        $janeDoe = new JobSeeker('Jane Doe');

        // Create publisher and attach subscribers
        $jobPostings = new EmploymentAgency();
        $jobPostings->attach($johnDoe);
        $jobPostings->attach($janeDoe);

        // Add a new job and see if subscribers get notified
        $jobPostings->notify(new JobPost('Software Engineer'));

        // Output
        self::assertEquals('Hi John Doe! New job posted: Software Engineer', $johnDoe->getLastNotice());
        self::assertEquals('Hi Jane Doe! New job posted: Software Engineer', $janeDoe->getLastNotice());


        // Detach a subscriber
        $jobPostings->detach($janeDoe);

        // Add a new job and see if subscribers get notified
        $jobPostings->notify(new JobPost('Engineering Manager'));

        self::assertEquals('Hi John Doe! New job posted: Engineering Manager', $johnDoe->getLastNotice());
        self::assertEquals('Hi Jane Doe! New job posted: Software Engineer', $janeDoe->getLastNotice());
    }
}
