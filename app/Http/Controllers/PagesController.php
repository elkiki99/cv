<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function about() {
        return view('about');
    }

    public function resume() {
        return view('resume');
    }

    public function portfolio() {
        return view('portfolio');
    }
}
