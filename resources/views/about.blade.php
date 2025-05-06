@php
    $lang = session('lang', 'en'); // 'en' por defecto si no hay nada en la sesión

    $title = $lang === 'en' ? 'About us' : 'Sobre nosotros';
    $description = $lang === 'en' ? 'Information about our company' : 'Información sobre nuestra empresa';
@endphp

<x-app-layout :title="$title" :meta-description="$description" class="space-y-12">
    <livewire:about />
</x-app-layout>