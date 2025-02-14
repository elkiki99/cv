<flux:footer class="mt-6 no-print" container>
    <div class="flex justify-between">
        <flux:link wire:navigate href="/">{{ session('lang') === 'es' ? 'Inicio' : 'Home' }}</flux:link>
        <flux:link wire:navigate href="/about">{{ session('lang') === 'es' ? 'Sobre mi' : 'About' }}</flux:link>
        <flux:link wire:navigate href="/portfolio">{{ session('lang') === 'es' ? 'Portfolio' : 'Portfolio' }}</flux:link>
        <flux:link wire:navigate href="/resume">{{ session('lang') === 'es' ? 'CV' : 'Resume' }}</flux:link>
    </div>
</flux:footer>
