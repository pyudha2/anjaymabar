<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dash', function () {
    return view('welcome');
});
Route::get('/ikan', function () {
    return view('welcome');
});
