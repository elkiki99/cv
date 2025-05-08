
<x-slot name="title">{{ $this->title }}</x-slot>
<x-slot name="metaDescription">{{ $this->metaDescription }}</x-slot>

<div
    class="flex flex-col max-w-3xl min-h-screen mx-auto space-y-6 print-adjust-spacing print-adjust-width print-adjust-h md:mt-6">
    <!-- Header -->
    <section class="padding-2-bug-fix">
        <div class="flex gap-8 sm:gap-16">
            <div class="space-y-2">
                <flux:heading level="1" class="mb-2" size="xl">Bruno Rossani</flux:heading>
                <flux:text>{{ $translations[$lang]['header']['bio'] }}
                </flux:text>
                <div class="flex items-center gap-2">
                    <flux:icon.globe-americas class="no-print" variant="micro" />
                    <flux:subheading>Isla de Flores 1586, Montevideo, Uruguay
                    </flux:subheading>
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

                <div class="hidden pt-1 print text-sm">
                    <flux:link variant="ghost" href="https://www.linkedin.com/in/brunorossani/" variant="ghost"
                        class="relative pr-2 after:content-['|'] after:absolute after:right-0">
                        linkedin.com/in/brunorossani</flux:link>
                    <flux:link variant="ghost" class="relative px-2 after:content-['|'] after:absolute after:right-0"
                        href="https://bruno-rossani.fly.dev/">
                        bruno-rossani.dev</flux:link>
                    <flux:link variant="ghost" class="relative px-2 after:content-['|'] after:absolute after:right-0"
                        href="mailto:brossani23@gmail.com">brossani23@gmail.com</flux:link>
                    <flux:link class="pl-2" variant="ghost" href="tel:+59891845585">+598 91 845 585</flux:link>
                </div>
            </div>

            <img src="{{ asset('me2.webp') }}" class="no-print rounded-lg size-12 md:size-20 md:size-28"
                alt="Bruno Rossani">
        </div>
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
                        <flux:text
                            class="text-sm text-zinc-500 dark:text-zinc-300 relative pl-5 before:content-['\2022'] before:absolute before:left-0">
                            {{ $responsibility }}
                        </flux:text>
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
                    <flux:text>
                        {{ $career['description'] }}
                    </flux:text>
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
                <flux:card class="bg-transparent! p-4! space-y-3 h-full flex flex-col print-remove-b print-adjust-p">
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-2">
                            <flux:link href="{{ $project['link'] }}" rel="noopener noreferrer" target="_blank"
                                class="text-sm text-zinc-700 dark:text-white/90">{{ $project['name'] }}
                            </flux:link>
                            @if ($project['is_active'])
                                <div class="bg-green-500 rounded-full size-1.5 pulse"></div>
                            @endif
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

        <div class="no-print">
            <div class="flex flex-wrap w-full gap-1 mt-auto">
                @foreach ($translations[$lang]['skills']['name'] as $skill)
                    <flux:badge size="sm" variant="pill" class="print-adjust-bg">{{ $skill }}</flux:badge>
                @endforeach
            </div>
        </div>

        <div class="hidden print">

            <div class="flex flex-wrap w-full gap-1 mt-auto">
                <flux:text>{{ implode(', ', $translations[$lang]['skills']['name']) }}</flux:text>
            </div>
        </div>
    </section>
</div>
