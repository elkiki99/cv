<flux:header
    class="flex flex-row items-center justify-center !px-2 md:!px-6 mx-6 mt-6 mb-0 md:mb-6 mr-auto bg-zinc-100 rounded-full md:mx-auto dark:bg-zinc-800 no-print md:w-[440px]">
    <flux:sidebar.toggle class="md:hidden hover:rounded-full no-print" icon="bars-2" />

    <flux:button icon="language" variant="subtle" wire:click="$dispatch('toggleLanguage')">
    </flux:button>

    <flux:spacer />
    <flux:navbar class="max-md:hidden no-print">
        <flux:navbar.item wire:navigate href="/">{{ session('lang') === 'es' ? 'Inicio' : 'Home' }}
        </flux:navbar.item>
        <flux:navbar.item wire:navigate href="/about">{{ session('lang') === 'es' ? 'Sobre mi' : 'About' }}
        </flux:navbar.item>
        <flux:navbar.item wire:navigate href="/portfolio">{{ session('lang') === 'es' ? 'Portfolio' : 'Portfolio' }}
        </flux:navbar.item>
        <flux:navbar.item wire:navigate href="/resume">{{ session('lang') === 'es' ? 'CV' : 'Resume' }}
        </flux:navbar.item>
    </flux:navbar>
    
    <flux:spacer />

    <!-- Dark mode button -->
    <div class="hidden md:flex no-print">
        <flux:button class="dark:hidden" x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon" variant="subtle"
            aria-label="Toggle dark mode" />
        <flux:button class="hidden dark:flex" x-data x-on:click="$flux.dark = ! $flux.dark" icon="sun"
            variant="subtle" aria-label="Toggle light mode" />
    </div>
</flux:header>
