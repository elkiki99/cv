<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppLayout extends Component
{
    public string $title;
    public string $metaDescription;

    public function __construct(string $title = '', string $metaDescription = '')
    {
        $this->title = $title;
        $this->metaDescription = $metaDescription;
    }

    public function render(): View
    {
        return view('layouts.app');
    }
}