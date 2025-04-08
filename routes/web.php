<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, World!';
});

Route::get('/items', function () {})->name('items.index');

Route::get('/items/create', function () {})->name('items.create');

Route::post('/items', function () {})->name('items.store');

Route::get('/items/{id}', function () {})->name('items.show');

Route::get('/items/{id}/edit', function () {})->name('items.edit');

Route::put('/items/{id}', function () {})->name('items.update');

Route::delete('/items/{id}', function () {})->name('items.destroy');

Route::redirect('/', '/items');