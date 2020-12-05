<?php

use App\Http\Controllers\FooController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/search', 'search');

## Duplications
Route::view('/buttons', 'buttons');

#extensions
Route::view('/colors', 'colors');

#variants
Route::view('/login', 'login');
Route::post('foo', FooController::class)->name('foo');

## Declarative JS
Route::view('/notification', 'notification');
