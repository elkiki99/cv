@section('title', $this->title)
@section('meta_description', $this->metaDescription)

<!-- About me -->
<section class="flex flex-col-reverse min-h-screen gap-16 space-y-6 md:mt-6 md:flex-row">
    <div class="w-full space-y-12 md:w-3/4">
        <div class="space-y-6">
            <div class="space-y-2">
                <flux:heading level="1" size="xl">{{ $translations[$lang]['header']['heading'] }}
                </flux:heading>

                <flux:text>
                    {{ $translations[$lang]['header']['p1'] }}
                </flux:text>
                <flux:text>
                    {{ $translations[$lang]['header']['p2'] }}
                </flux:text>
                <flux:text>
                    {{ $translations[$lang]['header']['p3'] }}
                </flux:text>
            </div>

            @include('components.socials')
        </div>

        <div class="space-y-2">
            <flux:heading size="lg" level="2">{{ $translations[$lang]['work']['title'] }}</flux:heading>
            <flux:text>
                {{ $translations[$lang]['work']['p1'] }}
            </flux:text>
            <flux:text>
                {{ $translations[$lang]['work']['p2'] }}
            </flux:text>
            <flux:text>
                {{ $translations[$lang]['work']['p3'] }}
            </flux:text>
        </div>

        <div class="space-y-2">
            <flux:heading size="lg" level="2">{{ $translations[$lang]['studies']['title'] }}</flux:heading>

            @foreach ($translations[$lang]['studies']['careers'] as $study)
                <flux:text class="relative pl-5 before:content-['\2022'] before:absolute before:left-0">
                    <flux:link rel="noopener noreferrer" href="{{ $study['link'] }}" class="pointer-events-none">
                        {{ $study['career'] }}</flux:link> - {{ $study['description'] }}
                </flux:text>
            @endforeach
        </div>

        <div class="space-y-6">
            <div class="space-y-2">
                <flux:heading size="lg" level="2">{{ $translations[$lang]['projects']['title'] }}
                </flux:heading>

                @foreach ($translations[$lang]['projects']['apps'] as $app)
                    <flux:text class="relative pl-5 before:content-['\2022'] before:absolute before:left-0">
                        <flux:link target="_blank" href="{{ $app['link'] }}" rel="noopener noreferrer">
                            {{ $app['name'] }}</flux:link> {{ $app['description'] }}
                    </flux:text>
                @endforeach
            </div>
            <flux:button as="link" href="/portfolio" wire:navigate variant="subtle" class="mr-auto no-print"
                icon-trailing="arrow-right">{{ session('lang') === 'es' ? 'Más proyectos' : 'More projects' }}
            </flux:button>
        </div>

        <div class="space-y-3">
            <flux:heading size="lg" level="2">{{ $translations[$lang]['youtube']['title'] }}</flux:heading>

            @foreach ($translations[$lang]['youtube']['channels'] as $channel)
                <flux:text class="relative pl-5 before:content-['\2022'] before:absolute before:left-0">
                    <flux:link target="_blank" href="{{ $channel['link'] }}" rel="noopener noreferrer">
                        {{ $channel['name'] }}</flux:link>
                </flux:text>
            @endforeach
        </div>
    </div>

    <div class="md:w-1/4">
        <img class="object-cover mr-6 rotate-3 rounded-xl w-56 md:w-72" src="{{ asset('me3.webp') }}" width="288"
            height="288" alt="Bruno Rossani">
    </div>
</section>
