<div class="!z-50">
    <flux:sidebar stashable sticky
        class="z-30 border-r md:hidden bg-zinc-50 dark:bg-zinc-900 border-zinc-200 dark:border-zinc-700 no-print">
        <flux:sidebar.toggle class="md:hidden" icon="x-mark" />

        <flux:navlist>
            <flux:navlist.item icon="home" wire:navigate href="/">
                {{ session('lang') === 'es' ? 'Inicio' : 'Home' }}
            </flux:navlist.item>
            <flux:navlist.item icon="user" wire:navigate href="/about">
                {{ session('lang') === 'es' ? 'Sobre mi' : 'About' }}</flux:navlist.item>
            <flux:navlist.item icon="briefcase" wire:navigate href="/portfolio">
                {{ session('lang') === 'es' ? 'Portaflio' : 'Portfolio' }}</flux:navlist.item>
            <flux:navlist.item icon="book-open" wire:navigate href="/resume">
                {{ session('lang') === 'es' ? 'CV' : 'Resume' }}</flux:navlist.item>
        </flux:navlist>  
    </flux:sidebar>
</div>