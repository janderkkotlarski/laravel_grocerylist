<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GroceryController;
use App\Http\Controllers\ItemController;

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

Route::get('/groceries', [GroceryController::class, 'index']);

Route::get('/items', [ItemController::class, 'index'])->name('items.index');

Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');

Route::post('/items', [ItemCOntroller::class, 'store'])->name('items.store');

Route::get('/items/{id}', function () {})->name('items.show');

Route::get('/items/{item}/edit', [ItemController::class, 'edit'])->name('items.edit');

Route::put('/items/{item}', [ItemController::class, 'update'])->name('items.update');

Route::delete('/items/{item}', [ItemController::class, 'destroy'])->name('items.destroy');

Route::redirect('/', '/items');