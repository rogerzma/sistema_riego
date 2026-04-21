<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cultivo', function () {
    return view('cultivo');
})->name('cultivo');
