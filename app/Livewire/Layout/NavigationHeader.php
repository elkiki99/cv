<?php

namespace App\Livewire\Layout;

use Livewire\Component;

class NavigationHeader extends Component
{
    protected $listeners = ['toggleLanguage'];

    public $lang = 'en';

    public $translations = [];

    public function toggleLanguage()
    {
        $this->lang = $this->lang === 'en' ? 'es' : 'en';
        session(['lang' => $this->lang]);
    }
    
    public function mount()
    {
        $this->lang = session('lang', 'en');
    }
    
    public function render()
    {
        return view('livewire.layout.navigation-header');
    }
}
