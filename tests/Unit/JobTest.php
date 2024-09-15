<?php

use App\Models\Employer;
use App\Models\Job;

it('it belong to an employer', function () {
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    expect($job->employer->is($employer))->toBeTrue();
});

it('can hav tags', function () {
    $job = Job::factory()->create();
    $job->tag('Frentend');

    expect($job->tags)->toHaveCount(1);
});
