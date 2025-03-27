{{-- <div class="flex">
    <flux:header
        class="flex flex-row items-center justify-center !px-2 md:!px-6 mx-6 mt-6 mb-0 md:mb-6 mr-auto bg-zinc-100 rounded-full md:mx-auto dark:bg-zinc-800 no-print md:w-[440px]">

        <flux:sidebar.toggle class="md:hidden hover:rounded-l-full hover:rounded-r-lg no-print" icon="bars-2" />

        <flux:button class="hover:rounded-r-full hover:rounded-l-lg md:hover:rounded-r-lg md:hover:rounded-l-lg"
            icon="language" variant="subtle" x-data x-on:click="$dispatch('toggleLanguage')">
        </flux:button>

        <flux:spacer />

        <flux:navbar class="max-md:hidden no-print">
            <flux:navbar.item wire:navigate href="/">{{ session('lang') === 'es' ? 'Inicio' : 'Home' }}
            </flux:navbar.item>
            <flux:navbar.item wire:navigate href="/about">{{ session('lang') === 'es' ? 'Sobre mi' : 'About' }}
            </flux:navbar.item>
            <flux:navbar.item wire:navigate href="/portfolio">
                {{ session('lang') === 'es' ? 'Portfolio' : 'Portfolio' }}
            </flux:navbar.item>
            <flux:navbar.item wire:navigate href="/resume">{{ session('lang') === 'es' ? 'CV' : 'Resume' }}
            </flux:navbar.item>
        </flux:navbar>

        <flux:spacer />

        <div class="hidden md:flex no-print">
            <flux:button class="dark:hidden" x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon" variant="subtle"
                aria-label="Toggle dark mode" />
            <flux:button class="hidden dark:flex" x-data x-on:click="$flux.dark = ! $flux.dark" icon="sun"
                variant="subtle" aria-label="Toggle light mode" />
        </div>
    </flux:header>

    <flux:header class="flex md:hidden !px-2 ml-auto mt-6 dark:bg-zinc-800 bg-zinc-100 rounded-full mx-6 no-print">
        <flux:button class="dark:hidden hover:rounded-full" x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon"
            variant="subtle" aria-label="Toggle dark mode" />
        <flux:button class="hidden dark:flex hover:rounded-full" x-data x-on:click="$flux.dark = ! $flux.dark"
            icon="sun" variant="subtle" aria-label="Toggle light mode" />
    </flux:header>
</div> --}}
