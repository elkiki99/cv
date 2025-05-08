<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\Portfolio;
use App\Livewire\Resume;

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/resume', Resume::class)->name('resume');
Route::get('/portfolio', Portfolio::class)->name('portfolio');