<?php

use App\Http\Controllers\FooController;
use Illuminate\Container\Container;
use Illuminate\Mail\Markdown;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

## dont touch
Route::view('/search', 'search');
Route::view('/card', 'card');

## design system
Route::view('/boxes', 'boxes');

## Duplications
Route::view('/buttons', 'buttons');

#extensions
Route::view('/colors', 'colors');
Route::view('/skew', 'skew');

#variants
Route::view('/login', 'login');
Route::post('foo', FooController::class)->name('foo');

## Declarative JS
Route::view('/notification', 'notification');

## Purgeable
Route::get('/purgable', function () {
    return view('purgeable', [
        'color' => 'red',
    ]);
});
