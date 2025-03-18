<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Clown',
                'celery' => '50 turns'
            ],
            [
                'id' => 2,
                'title' => 'Jester',
                'celery' => 'eaten'
            ],
            [
                'id' => 3,
                'title' => 'Trickster',
                'celery' => 'imagine'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Clown',
            'celery' => '50 turns'
        ],
        [
            'id' => 2,
            'title' => 'Jester',
            'celery' => 'eaten'
        ],
        [
            'id' => 3,
            'title' => 'Trickster',
            'celery' => 'imagine'
        ]
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    dd($job);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
