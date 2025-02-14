<div>
    <!-- Portfolio -->
    <section class="flex flex-col min-h-screen space-y-6 print-adjust-h md:mt-6">
        <div>
            <flux:heading level="1" class="!text-4xl font-black">{{ $translations[$lang]['header']['heading1'] }}<br
                    class="hidden md:flex">{{ $translations[$lang]['header']['heading2'] }}</flux:heading>
            <flux:subheading size="lg">
                {{ $translations[$lang]['header']['subheading'] }}
            </flux:subheading>
        </div>

        <div class="space-y-6 print-adjust-spacing">
            <div
                class="grid max-w-xl grid-cols-1 gap-4 print-adjust-width md:max-w-full md:grid-cols-2 lg:max-w-full lg:grid-cols-3">
                @foreach ($translations[$lang]['projects'] as $project)
                    <flux:card
                        class="!border-none hover:cursor-pointer !bg-transparent group transition-none hover:transition-colors duration-200 hover:!bg-zinc-100 dark:hover:!bg-zinc-800 print-adjust-p">
                        <a rel="noreferrer noopener" target="_blank" href="{{ $project['link'] }}">
                            <div class="flex flex-col h-full space-y-6 print-adjust-spacing">
                                
                                {!! Blade::render($project['logo']) !!}
                                
                                <div class="space-y-2">
                                    <div class="flex items-center gap-2">
                                        <flux:heading level="2" size="lg">{{ $project['title'] }}
                                        </flux:heading>
                                        @if ($project['status'] !== '')
                                            <flux:badge size="sm" icon="wrench" color="green" class="no-print">
                                                {{ $project['status'] }}
                                            </flux:badge>
                                        @endif
                                    </div>
                                    <p class="text-sm text-zinc-500 dark:text-white/70">
                                        {{ $project['description'] }}
                                    </p>
                                </div>
                                <div class="flex-1">
                                    <div class="flex flex-wrap w-full gap-1">
                                        @foreach ($project['tags'] as $tag)
                                            <flux:badge size="sm" variant="pill" class="print-adjust-bg">
                                                {{ $tag }}</flux:badge>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="flex items-center gap-2 mt-auto">
                                    <flux:icon.link variant="micro" />
                                    <p class="inline font-medium underline-offset-[6px] transition-none hover:transition-colors duration-200 group-hover:decoration-current underline text-[var(--color-accent-content)] decoration-[color-mix(in_oklab,var(--color-accent-content),transparent_80%)] !text-sm"
                                        class="!text-sm">
                                        {{ $project['link_name'] }}</p>
                                    <div class="bg-green-500 rounded-full size-1.5 pulse"></div>
                                </div>
                            </div>
                        </a>
                    </flux:card>
                @endforeach
            </div>

            <flux:button as="link" href="https://github.com/elkiki99" rel="noopener noreferrer" target="_blank"
                variant="subtle" class="mr-auto no-print" icon-trailing="arrow-right">{{ session('lang') === 'es' ? 'Más proyectos' : 'More projects' }}</flux:button>
        </div>
    </section>
</div>