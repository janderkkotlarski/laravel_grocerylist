<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/celeries', function () {
    return view('celeries', [
        'celeries' => [
            [
                'id' => 1,
                'title' => 'Clown',
                'opinion' => '50 turns'
            ],
            [
                'id' => 2,
                'title' => 'Jester',
                'opinion' => 'eaten'
            ],
            [
                'id' => 3,
                'title' => 'Trickster',
                'opinion' => 'imagine'
            ]
        ]
    ]);
});

Route::get('/celeries/{id}', function ($id) {
    $celeries = [
        [
            'id' => 1,
            'title' => 'Clown',
            'opinion' => '50 turns'
        ],
        [
            'id' => 2,
            'title' => 'Jester',
            'opinion' => 'eaten'
        ],
        [
            'id' => 3,
            'title' => 'Trickster',
            'opinion' => 'imagine'
        ]
    ];


    $celery = Arr::first($celeries, fn($celery) => $celery['id'] == $id);

    // dd($celery);

    return view('celery', ['celery' => $celery]);
});

Route::get('/contact', function () {
    return view('contact');
});
