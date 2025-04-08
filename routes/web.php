<?php


use Illuminate\Support\Facades\Route;



echo 'This does work.';

Route::get('/', function () {
    return view('home');
});

/*

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/hello', function () {
    return 'Hello, World!';
});

*/