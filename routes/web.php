<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

