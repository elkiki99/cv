<?php

namespace App\Livewire\Layout;

use Livewire\Attributes\On;
use Livewire\Component;

class Footer extends Component
{
    public $lang = 'en';
    public $translations = [];

    #[On('toggleLanguage')]
    public function mount()
    {
        $this->lang = session('lang') ?? 'en';
    }
    
    public function render()
    {
        return view('livewire.layout.footer');
    }
}
