<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});


$items = [
    ['name' => 'Item 1', 'amount' => 10, 'id' => 1],
    ['name' => 'Item 2', 'amount' => 20, 'id' => 2],
    ['name' => 'Item 3', 'amount' => 30, 'id' => 3],
];
Route::get('/items', function () use ($items) {
    $message = 'what';
    $count = count($items) + 1;
    // does not persist!
    $items[$count] = ['name' => "Item " . $count, 'amount' => $count * 10, 'id' => $count];
    return view('items.index', ['items' => $items, 'message' => $message]);
});

Route::get('/items/{id}', function ($id) use ($items) {
    $item = $items[$id - 1];
    return view('items.show', ['item' => $item]);
});
