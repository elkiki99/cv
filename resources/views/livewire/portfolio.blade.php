{{-- 
<x-slot name="title">{{ $this->title }}</x-slot>
<x-slot name="metaDescription">{{ $this->metaDescription }}</x-slot> --}}

@section('title', $this->title)
@section('metaDescription', $this->metaDescription)

<!-- Portfolio -->
<section class="flex flex-col min-h-screen space-y-6 print-adjust-h md:mt-6">
    <div>
        <flux:heading level="1" size="xl">
            {!! Blade::render($translations[$lang]['header']['heading']) !!}
        </flux:heading>
        <flux:subheading>
            {{ $translations[$lang]['header']['subheading'] }}
        </flux:subheading>
    </div>

    <div class="flex flex-col space-y-6 print-adjust-spacing">
        <div
            class="grid max-w-xl grid-cols-1 gap-4 print-adjust-width md:max-w-full md:grid-cols-2 lg:max-w-full lg:grid-cols-3">
            @foreach ($translations[$lang]['projects'] as $project)
                <flux:card
                    class="border-none! hover:cursor-pointer bg-transparent! group transition-none hover:transition-colors duration-200 hover:bg-zinc-100! dark:hover:bg-zinc-800! print-adjust-p">
                    <a rel="noreferrer noopener" target="_blank" href="{{ $project['link'] }}">
                        <div class="flex flex-col h-full space-y-6 print-adjust-spacing">

                            {!! Blade::render($project['logo']) !!}

                            <div class="grow h-full space-y-2">
                                <div class="flex items-center gap-2">
                                    <flux:heading level="2" size="lg">{{ $project['title'] }}
                                    </flux:heading>
                                    @if ($project['status'] !== '')
                                        <flux:badge size="sm" icon="wrench" color="green" class="no-print">
                                            {{ $project['status'] }}
                                        </flux:badge>
                                    @endif
                                </div>
                                <flux:text>
                                    {{ $project['description'] }}
                                </flux:text>
                            </div>
                            <div class="flex-1 mt-auto">
                                <div class="flex flex-wrap w-full gap-1">
                                    @foreach ($project['tags'] as $tag)
                                        <flux:badge size="sm" variant="pill" class="print-adjust-bg">
                                            {{ $tag }}</flux:badge>
                                    @endforeach
                                </div>
                            </div>

                            <div class="flex items-center gap-2">
                                <flux:icon.link variant="micro" />
                                <p class="inline font-medium underline-offset-[6px] transition-none hover:transition-colors duration-200 group-hover:decoration-current underline text-[var(--color-accent-content)] decoration-[color-mix(in_oklab,var(--color-accent-content),transparent_80%)] text-sm!"
                                    class="text-sm!">
                                    {{ $project['link_name'] }}</p>
                                <div class="bg-green-500 rounded-full size-1.5 pulse"></div>
                            </div>
                        </div>
                    </a>
                </flux:card>
            @endforeach
        </div>

        <flux:button as="link" href="https://github.com/elkiki99" rel="noopener noreferrer" target="_blank"
            variant="subtle" class="ml-auto no-print" icon-trailing="arrow-right">
            {{ session('lang') === 'es' ? 'Más proyectos' : 'More projects' }}</flux:button>
    </div>
</section>
