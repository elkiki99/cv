<div
    class="flex flex-col max-w-3xl min-h-screen mx-auto space-y-6 print-adjust-spacing print-adjust-width print-adjust-h md:mt-6">
    <!-- Header -->
    <section>
        <div class="flex gap-8 sm:gap-16">
            <div class="space-y-2">
                <flux:heading level="1" class="mb-2" size="xl">Bruno Rossani</flux:heading>
                <p class="text-sm text-zinc-500 dark:text-zinc-300">{{ $translations[$lang]['header']['bio'] }}
                </p>
                <div class="flex items-center gap-2">
                    <flux:icon.globe-americas variant="micro" />
                    <flux:subheading>Montevideo, Uruguay</flux:subheading>
                </div>

                <div class="flex gap-2 pt-1 no-print">
                    <flux:button size="sm" as="link" wire:navigate href="/" icon="globe-alt">
                    </flux:button>
                    <flux:button size="sm" as="link" href="mailto:brossani23@gmail.com" icon="envelope">
                    </flux:button>
                    <flux:button size="sm" as="link" href="https://github.com/elkiki99" target="_blank"
                        rel="noopener noreferrer" icon="github"></flux:button>
                    <flux:button size="sm" as="link" href="https://www.linkedin.com/in/brunorossani"
                        target="_blank" rel="noopener noreferrer" icon="linkedin"></flux:button>
                    <flux:button size="sm" as="link" href="tel:+59891845585" icon="phone">
                    </flux:button>
                    <flux:button size="sm" onclick="window.print()" icon="printer">
                    </flux:button>
                </div>

                <div class="hidden gap-2 py-1 text-sm print">
                    <flux:link class="relative pr-5 after:content-['|'] after:absolute after:right-0" href="/">
                        brunorossani.me</flux:link>
                    <flux:link class="relative pr-5 after:content-['|'] after:absolute after:right-0"
                        href="mailto:brossani23@gmail.com">brossani23@gmail.com</flux:link>
                    <flux:link href="tel:+59891845585">+598 91 845 585</flux:link>
                </div>
            </div>

            <img src="{{ asset('me.webp') }}" class="rounded-lg size-20 md:size-28">
        </div>
    </section>

    <!-- About -->
    <section>
        <flux:heading class="mb-2" size="lg">{{ $translations[$lang]['about']['title'] }}
        </flux:heading>
        <p class="text-sm text-zinc-500 dark:text-zinc-300">
            {{ $translations[$lang]['about']['text'] }}
        </p>
    </section>

    <!-- Work experience -->
    <section>
        <flux:heading class="mb-2" size="lg">{{ $translations[$lang]['work']['title'] }}</flux:heading>
        <div class="space-y-6">
            @foreach ($translations[$lang]['work']['jobs'] as $job)
                <div>
                    <div class="flex items-center gap-4 mb-2">
                        <flux:subheading class="text-zinc-700 dark:text-white/90">{{ $job['position'] }}
                        </flux:subheading>
                        <div class="hidden gap-1 md:flex">
                            @foreach ($job['skills'] as $skill)
                                <flux:badge size="sm" variant="pill" class="print-adjust-bg">{{ $skill }}
                                </flux:badge>
                            @endforeach
                        </div>
                        <flux:spacer />
                        <flux:subheading class="text-zinc-700 dark:text-white/90">{{ $job['years'] }}</flux:subheading>
                    </div>
                    @foreach ($job['responsibilities'] as $responsibility)
                        <p
                            class="text-sm text-zinc-500 dark:text-zinc-300 relative pl-5 before:content-['\2022'] before:absolute before:left-0">
                            {{ $responsibility }}
                        </p>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>

    <!-- Education -->
    <section>
        <flux:heading class="mb-2" size="lg">{{ $translations[$lang]['education']['title'] }}
        </flux:heading>
        <div class="space-y-6">
            @foreach ($translations[$lang]['education']['careers'] as $career)
                <div>
                    <div class="flex items-center gap-2 mb-2">
                        <flux:subheading class="text-zinc-700 dark:text-white/90">{{ $career['degree'] }}
                        </flux:subheading>
                        <flux:spacer />
                        <flux:subheading class="text-zinc-700 dark:text-white/90">{{ $career['years'] }}
                        </flux:subheading>
                    </div>
                    <p class="text-sm text-zinc-500 dark:text-zinc-300">
                        {{ $career['description'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Side projects -->
    <section class="no-print">
        <flux:heading class="mb-2" size="lg">{{ $translations[$lang]['side_projects']['title'] }}
        </flux:heading>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($translations[$lang]['side_projects']['projects'] as $project)
                {{-- <div> --}}
                <flux:card class="!bg-transparent !p-4 space-y-3 h-full flex flex-col print-remove-b print-adjust-p">
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-2">
                            <flux:link href="{{ $project['link'] }}" rel="noopener noreferrer" target="_blank"
                                class="text-sm text-zinc-700 dark:text-white/90">{{ $project['name'] }}
                            </flux:link>
                            <div class="bg-green-500 rounded-full size-1.5 pulse"></div>
                        </div>
                        <flux:subheading>{{ $project['description'] }}
                        </flux:subheading>
                    </div>

                    <div class="flex flex-wrap w-full gap-1 mt-auto">
                        @foreach ($project['technologies'] as $technology)
                            <flux:badge size="sm" variant="pill" class="print-adjust-bg">{{ $technology }}
                            </flux:badge>
                        @endforeach
                    </div>
                </flux:card>
            @endforeach
        </div>
    </section>

    <!-- Skills -->
    <section>
        <flux:heading class="mb-2" size="lg">{{ $translations[$lang]['skills']['title'] }}
        </flux:heading>
        <div class="flex flex-wrap w-full gap-1 mt-auto">
            @foreach ($translations[$lang]['skills']['name'] as $skill)
                <flux:badge size="sm" variant="pill" class="print-adjust-bg">{{ $skill }}</flux:badge>
            @endforeach
        </div>
    </section>
</div>
