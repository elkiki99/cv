<div class="space-y-12">
    <!-- Header -->
    <section class="flex flex-col min-h-[80vh] print-adjust-h space-y-6">
        <img class="rounded-full size-24" src="{{ asset('me2.webp') }}" alt="Bruno Rossani">
        {{-- <flux:profile circle :chevron="false" avatar="{{ asset('me2.webp') }}" />
        <flux:profile circle :chevron="false" avatar="https://unavatar.io/x/calebporzio" /> --}}

        <div class="space-y-2">
            <flux:heading level="1" size="xl">{{ $translations[$lang]['header']['heading'] }}
            </flux:heading>
            
            <flux:text>
                {!! Blade::render($translations[$lang]['header']['subheading']) !!}

                <flux:link rel="noopener noreferrer" target="_blank" href="mailto:brossani23@gmail.com">
                    {{ $translations[$lang]['header']['mail'] }}
                </flux:link>
            </flux:text>
        </div>

        <div>
            <flux:button as="link" href="/resume" wire:navigate variant="filled" class="no-print"
                icon-trailing="arrow-right">
                {{ session('lang') === 'es' ? 'Chequeá mi curriculum' : 'Check out my resume' }}</flux:button>
        </div>

        <div class="grow no-print"></div>

        <div class="pb-6 no-print">
            <livewire:components.marquee />
        </div>
    </section>

    <!-- My stack -->
    <section class="flex flex-col min-h-screen print-adjust-h">
        <div class="mb-6">
            <flux:heading level="2" size="lg">{{ $translations[$lang]['stack']['heading'] }}</flux:heading>
            <flux:subheading>
                {{ $translations[$lang]['stack']['subheading'] }}
            </flux:subheading>
        </div>

        <div class="flex flex-col space-y-6 print-adjust-spacing">
            <div class="grid max-w-xl grid-cols-1 gap-4 print-adjust-width lg:max-w-full lg:grid-cols-2">
                @foreach ($translations[$lang]['stack']['technologies'] as $technology)
                    <flux:card
                        class="border-none! hover:cursor-pointer bg-transparent! hover:bg-zinc-100! dark:hover:bg-zinc-800! group transition-none hover:transition-colors duration-200 print-adjust-p">
                        <div class="flex flex-col gap-4 sm:flex-row">
                            {!! Blade::render($technology['logo']) !!}

                            <div class="space-y-2">
                                <flux:heading level="3" size="lg">{{ $technology['name'] }}</flux:heading>
                                <flux:text>
                                    {{ $technology['info'] }}
                                </flux:text>
                            </div>
                        </div>
                    </flux:card>
                @endforeach
            </div>

            <flux:button as="link" href="/about" wire:navigate variant="subtle" class="ml-auto no-print"
                icon-trailing="arrow-right">{{ session('lang') === 'es' ? 'Más sobre mi' : 'More about me' }}
            </flux:button>
        </div>
    </section>

    <!-- Latest projects -->
    <section class="flex flex-col min-h-screen print-adjust-h">
        <div class="mb-6">
            <flux:heading level="2" size="lg">{{ $translations[$lang]['projects']['heading'] }}
            </flux:heading>
            <flux:subheading>
                {{ $translations[$lang]['projects']['subheading'] }}
            </flux:subheading>
        </div>

        <div class="space-y-6 print-adjust-spacing">
            @foreach ($translations[$lang]['projects']['cards'] as $project)
                <flux:card
                    class="max-w-xl print-adjust-width border-none! hover:cursor-pointer bg-transparent! hover:bg-zinc-100! dark:hover:bg-zinc-800! group transition-none hover:transition-colors duration-200 print-adjust-p">
                    <a target="_blank" href="{{ $project['link'] }}" rel="noopener noreferrer">
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <flux:heading level="3" size="lg">{{ $project['name'] }}</flux:heading>
                                <flux:icon.arrow-right variant="micro" class="no-print" />
                            </div>
                            <flux:text>
                                {{ $project['description'] }}
                            </flux:text>
                        </div>
                    </a>
                </flux:card>
            @endforeach

            <flux:button as="link" href="/portfolio" wire:navigate variant="subtle" class="no-print"
                icon-trailing="arrow-right">{{ session('lang') === 'es' ? 'Más proyectos' : 'More projects' }}
            </flux:button>
        </div>
    </section>
</div>
