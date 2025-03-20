<?php

use Illuminate\Support\Facades\Route;
use App\Models\Celery;

Route::get('/', function () {
    $celeries = Celery::all();

    dd($celeries);

    //return view('home');
});

Route::get('/celeries', function () {
    return view('celeries', [
        'celeries' => Celery::all()
    ]);
});

Route::get('/celeries/{id}', function ($id) {
    // Find the appropriate entry
    $celery = Celery::find($id);

    // Keep the name the same
    return view('celery', ['celery' => $celery]);
});

Route::get('/contact', function () {
    return view('contact');
});
