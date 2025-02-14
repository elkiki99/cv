<!-- About me -->
<section class="flex flex-col-reverse min-h-screen gap-16 space-y-6 md:mt-6 md:flex-row">
    <div class="w-full space-y-12 md:w-3/5">
        <div class="space-y-6">
            <div class="space-y-2">
                <flux:heading level="1" class="!text-4xl font-black">{{ $translations[$lang]['header']['heading'] }}
                </flux:heading>
                <p class="text-base text-zinc-500 dark:text-white/70">
                    {{ $translations[$lang]['header']['p1'] }}
                </p>
                <p class="text-base text-zinc-500 dark:text-white/70">
                    {{ $translations[$lang]['header']['p2'] }}
                </p>
                <p class="text-base text-zinc-500 dark:text-white/70">
                    {{ $translations[$lang]['header']['p3'] }}
                </p>
            </div>

            @include('components.socials')
        </div>

        <div class="space-y-2">
            <flux:heading size="xl" level="2">{{ $translations[$lang]['work']['title'] }}</flux:heading>
            <p class="text-base text-zinc-500 dark:text-white/70">
                {{ $translations[$lang]['work']['p1'] }}
            </p>
            <p class="text-base text-zinc-500 dark:text-white/70">
                {{ $translations[$lang]['work']['p2'] }}
            </p>
            <p class="text-base text-zinc-500 dark:text-white/70">
                {{ $translations[$lang]['work']['p3'] }}
            </p>
        </div>

        <div class="space-y-2">
            <flux:heading size="xl" level="2">{{ $translations[$lang]['studies']['title'] }}</flux:heading>

            @foreach ($translations[$lang]['studies']['careers'] as $study)
                <p
                    class="text-base text-zinc-500 dark:text-white/70 relative pl-5 before:content-['\2022'] before:absolute before:left-0">
                    <flux:link class="pointer-events-none">
                        {{ $study['career'] }}</flux:link> - {{ $study['description'] }}
                </p>
            @endforeach
        </div>

        <div class="space-y-6">
            <div class="space-y-2">
                <flux:heading size="xl" level="2">{{ $translations[$lang]['projects']['title'] }}
                </flux:heading>

                @foreach ($translations[$lang]['projects']['apps'] as $app)
                    <p
                        class="text-base text-zinc-500 dark:text-white/70 relative pl-5 before:content-['\2022'] before:absolute before:left-0">
                        <flux:link target="_blank" href="{{ $app['link'] }}" rel="noopener noreferrer">
                            {{ $app['name'] }}</flux:link> {{ $app['description'] }}
                    </p>
                @endforeach
            </div>
            <flux:button as="link" href="/portfolio" wire:navigate variant="subtle" class="mr-auto no-print"
                icon-trailing="arrow-right">{{ session('lang') === 'es' ? 'Más proyectos' : 'More projects' }}
            </flux:button>
        </div>

        <div class="space-y-3">
            <flux:heading size="xl" level="2">{{ $translations[$lang]['youtube']['title'] }}</flux:heading>

            @foreach ($translations[$lang]['youtube']['channels'] as $channel)
                <p
                    class="text-base text-zinc-500 dark:text-white/70 relative pl-5 before:content-['\2022'] before:absolute before:left-0">
                    <flux:link target="_blank" href="{{ $channel['link'] }}" rel="noopener noreferrer">
                        {{ $channel['name'] }}</flux:link>
                </p>
            @endforeach
        </div>
    </div>

    <div class="md:w-2/5 ">
        <img class="object-cover mr-6 rotate-3 rounded-xl w-72 md:w-96" src="{{ asset('me.webp') }}"
            alt="Bruno Rossani">
    </div>
</section>
