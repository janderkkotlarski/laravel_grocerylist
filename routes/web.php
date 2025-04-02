<?php

use Illuminate\Support\Facades\Route;
use App\Models\Celery;

Route::get('/', function () {
    return view('home');
});

Route::get('/celeries', function () {
    // The following is eager loading:
    $celeries = Celery::with('employer')->cursorPaginate(3);
    // The following leads to lazy loading in the celeries balde page:
    // $celeries = Celery::all();

    return view('celeries', [
        'celeries' => $celeries
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
