<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/items', function () {
    $items = [
        ['name' => 'Item 1', 'amount' => 10],
        ['name' => 'Item 2', 'amount' => 20],
        ['name' => 'Item 3', 'amount' => 30],
    ];
    $message = 'what';
    return view('items.index', ['items' => $items, ]);
});
