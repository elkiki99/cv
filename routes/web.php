<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'welcome']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/resume', [PagesController::class, 'resume']);
Route::get('/portfolio', [PagesController::class, 'portfolio']);

