<!-- Navigation -->
{{-- <livewire:layout.navigation-header />    --}}
<div class="">
    <livewire:layout.navigation-header />

    <!-- Dark mode button -->
    <flux:header class="flex md:hidden !px-2 ml-auto mt-6 dark:bg-zinc-800 bg-zinc-100 rounded-full mx-6 no-print">
        <flux:button class="dark:hidden hover:rounded-full" x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon"
            variant="subtle" aria-label="Toggle dark mode" />
        <flux:button class="hidden dark:flex hover:rounded-full" x-data x-on:click="$flux.dark = ! $flux.dark"
            icon="sun" variant="subtle" aria-label="Toggle light mode" />
    </flux:header>

    <livewire:layout.sidebar />
    <div class="">
        <flux:sidebar stashable sticky
            class="z-30 border-r md:hidden bg-zinc-50 dark:bg-zinc-900 border-zinc-200 dark:border-zinc-700 no-print">
            <flux:sidebar.toggle class="md:hidden" icon="x-mark" />

            <flux:navlist>
                <flux:navlist.item icon="home" wire:navigate href="/">
                    {{ session('lang') === 'es' ? 'Inicio' : 'Home' }}</flux:navlist.item>
                <flux:navlist.item icon="user" wire:navigate href="/about">
                    {{ session('lang') === 'es' ? 'Sobre mi' : 'About' }}</flux:navlist.item>
                <flux:navlist.item icon="briefcase" wire:navigate href="/portfolio">
                    {{ session('lang') === 'es' ? 'Portaflio' : 'Portfolio' }}</flux:navlist.item>
                <flux:navlist.item icon="book-open" wire:navigate href="/resume">
                    {{ session('lang') === 'es' ? 'CV' : 'Resume' }}</flux:navlist.item>
            </flux:navlist>
        </flux:sidebar>
    </div>
    
