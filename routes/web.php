<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
})->name('hi');

Route::resource('items', ItemController::class);
