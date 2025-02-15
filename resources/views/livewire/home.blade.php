<div class="space-y-12">
    <!-- Header -->
    <section class="flex flex-col min-h-[80vh] print-adjust-h space-y-6">
        <img class="rounded-full size-24" src="{{ asset('me.webp') }}" alt="Bruno Rossani">

        <div class="space-y-2">
            <flux:heading level="1" class="!text-4xl font-black">{{ $translations[$lang]['header']['heading'] }}
            </flux:heading>
            <p class="text-base text-zinc-500 dark:text-white/70">
                {{ $translations[$lang]['header']['subheading1'] }}<br class="hidden md:flex">
                {{ $translations[$lang]['header']['subheading2'] }}<br class="hidden md:flex">
                {{ $translations[$lang]['header']['subheading3'] }}

                <flux:link rel="noopener noreferrer" target="_blank" href="mailto:brossani23@gmail.com">
                    {{ $translations[$lang]['header']['mail'] }}
                </flux:link>
            </p>
        </div>

        @include('components.socials')

        <div class="flex-grow no-print"></div>

        <div class="pb-6 no-print">
            <livewire:components.marquee />
        </div>
    </section>

    <!-- My stack -->
    <section class="flex flex-col min-h-screen print-adjust-h">
        <div class="mb-6">
            <flux:heading level="2" size="xl">{{ $translations[$lang]['stack']['heading'] }}</flux:heading>
            <flux:subheading size="lg">
                {{ $translations[$lang]['stack']['subheading'] }}
            </flux:subheading>
        </div>

        <div class="space-y-6 print-adjust-spacing">
            <div class="grid max-w-xl grid-cols-1 gap-4 print-adjust-width lg:max-w-full lg:grid-cols-2">
                @foreach ($translations[$lang]['stack']['technologies'] as $technology)
                    <flux:card
                        class="!border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800 group transition-none hover:transition-colors duration-200 print-adjust-p">
                        <div class="flex gap-4">
                            {!! Blade::render($technology['logo']) !!}

                            <div class="space-y-2">
                                <flux:heading level="3" size="lg">{{ $technology['name'] }}</flux:heading>
                                <p class="text-sm text-zinc-500 dark:text-white/70">
                                    {{ $technology['info'] }}
                                </p>
                            </div>
                        </div>
                    </flux:card>
                @endforeach
            </div>

            <flux:button as="link" href="/about" wire:navigate variant="subtle" class="mr-auto no-print"
                icon-trailing="arrow-right">{{ session('lang') === 'es' ? 'Más sobre mi' : 'More about me' }}</flux:button>
        </div>
    </section>

    <!-- Latest projects -->
    <section class="flex flex-col min-h-screen print-adjust-h">
        <div class="mb-6">
            <flux:heading level="2" size="xl">{{ $translations[$lang]['projects']['heading'] }}
            </flux:heading>
            <flux:subheading size="lg">
                {{ $translations[$lang]['projects']['subheading'] }}
            </flux:subheading>
        </div>

        <div class="space-y-6 print-adjust-spacing">
            @foreach ($translations[$lang]['projects']['cards'] as $project)
                <flux:card
                    class="max-w-xl print-adjust-width !border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800 group transition-none hover:transition-colors duration-200 print-adjust-p">
                    <a target="_blank" href="{{ $project['link'] }}" rel="noopener noreferrer">
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <flux:heading level="3" size="lg">{{ $project['name'] }}</flux:heading>
                                <flux:icon.arrow-right variant="micro" class="no-print" />
                            </div>
                            <p class="text-sm text-zinc-500 dark:text-white/70">
                                {{ $project['description'] }}
                            </p>
                        </div>
                    </a>
                </flux:card>
            @endforeach

            <flux:button as="link" href="/portfolio" wire:navigate variant="subtle" class="mr-auto no-print"
                icon-trailing="arrow-right">{{ session('lang') === 'es' ? 'Más proyectos' : 'More projects' }}</flux:button>
        </div>
    </section>
</div>
