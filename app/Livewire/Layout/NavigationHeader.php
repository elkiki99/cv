<?php

namespace App\Livewire\Layout;

use Livewire\Component;

class NavigationHeader extends Component
{
    public $lang;
    public $translations = [];

    public function toggleLanguage()
    {
        $this->lang = $this->lang === 'en' ? 'es' : 'en';
        $this->dispatch('toggleLanguage', $this->lang);
        session(['lang' => $this->lang]);
    }
    
    public function mount()
    {
        $this->lang = session('lang');
    }
    
    public function render()
    {
        return view('livewire.layout.navigation-header');
    }
}
