@section('title', $this->title)
@section('meta_description', $this->metaDescription)

<div
    class="flex flex-col max-w-4xl min-h-screen mx-auto space-y-6 print-adjust-spacing print-adjust-width print-adjust-h md:mt-6">
    <!-- Header -->
    <section class="padding-2-bug-fix space-y-2">
        <div class="flex">
            <!-- Name and title -->
            <div>
                <flux:heading level="1" class="!text-3xl !mb-1">{{ $translations[$lang]['header']['name'] }}
                </flux:heading>
                <flux:subheading class="!text-lg" level="2">{{ $translations[$lang]['header']['title'] }}</flux:subheading>
                <flux:text class="no-print my-2">{{ $translations[$lang]['header']['bio'] }}</flux:text>
            </div>

            <!-- Avatar -->
            <div class="ml-auto no-print">
                <flux:avatar circle width="80" height="80" class="{{ $lang == 'en' ? 'no-print' : '' }}"
                    name="{{ $translations[$lang]['header']['name'] }}" size="2xl" src="{{ asset('me2.webp') }}" />
            </div>
            <div class="ml-auto print hidden">
                <flux:avatar circle width="64" height="64" class="{{ $lang == 'en' ? 'no-print' : '' }}"
                    name="{{ $translations[$lang]['header']['name'] }}" size="xl" src="{{ asset('me2.webp') }}" />
            </div>
        </div>

        <!-- Buttons -->
        <div class="flex gap-2 no-print">
            <flux:button
                aria-label="{{ session('lang') == 'en' ? 'Go to ' . $translations[$lang]['header']['name'] . '\'s website' : 'Ir al sitio web de ' . $translations[$lang]['header']['name'] }}"
                size="sm" as="link" wire:navigate href="/" icon="globe-alt">
            </flux:button>

            <flux:button
                aria-label="{{ session('lang') == 'en' ? 'Call ' . $translations[$lang]['header']['name'] : 'Llamar a ' . $translations[$lang]['header']['name'] }}"
                size="sm" as="link" rel="noopener noreferrer"
                href="{{ $translations[$lang]['header']['location_link'] }}" target="_blank" icon="map-pin">
            </flux:button>

            <flux:button
                aria-label="{{ session('lang') == 'en' ? 'Send an email to ' . $translations[$lang]['header']['name'] : 'Enviar un correo a ' . $translations[$lang]['header']['name'] }}"
                size="sm" as="link" href="mailto:{{ $translations[$lang]['header']['mail'] }}"
                icon="envelope">
            </flux:button>

            <flux:button
                aria-label="{{ session('lang') == 'en' ? 'Visit ' . $translations[$lang]['header']['name'] . '\'s GitHub profile' : 'Ir al perfil de GitHub de ' . $translations[$lang]['header']['name'] }}"
                size="sm" as="link" href="{{ $translations[$lang]['header']['github'] }}" target="_blank"
                rel="noopener noreferrer" icon="github">
            </flux:button>

            <flux:button
                aria-label="{{ session('lang') == 'en' ? 'Visit ' . $translations[$lang]['header']['name'] . '\'s LinkedIn profile' : 'Ir al perfil de LinkedIn de ' . $translations[$lang]['header']['name'] }}"
                size="sm" as="link" href="{{ $translations[$lang]['header']['linkedin'] }}" target="_blank"
                rel="noopener noreferrer" icon="linkedin">
            </flux:button>

            <flux:button
                aria-label="{{ session('lang') == 'en' ? 'Call ' . $translations[$lang]['header']['name'] : 'Llamar a ' . $translations[$lang]['header']['name'] }}"
                size="sm" as="link" href="tel:{{ $translations[$lang]['header']['phone'] }}" icon="phone">
            </flux:button>

            <flux:button class="cursor-pointer"
                aria-label="{{ session('lang') == 'en' ? 'Print this page' : 'Imprimir esta página' }}" size="sm"
                onclick="window.print()" icon="printer">
            </flux:button>
        </div>

        <!-- Links -->
        <div class="hidden print text-xs flex flex-wrap gap-x-2 gap-y-1">
            <flux:link variant="ghost" class="relative pr-2 after:content-['|'] after:absolute after:right-0"
                href="{{ $translations[$lang]['header']['linkedin'] }}">
                {{ $translations[$lang]['header']['linkedin'] }}
            </flux:link>
            <flux:link variant="ghost" class="relative pr-2 after:content-['|'] after:absolute after:right-0"
                href="{{ $translations[$lang]['header']['website'] }}">
                bruno-rossani.fly.dev
            </flux:link>
            <flux:link variant="ghost" class="relative pr-2 after:content-['|'] after:absolute after:right-0"
                href="mailto:{{ $translations[$lang]['header']['mail'] }}">
                {{ $translations[$lang]['header']['mail'] }}
            </flux:link>
            <flux:link variant="ghost" class="relative pr-2 after:content-['|'] after:absolute after:right-0"
                href="tel:{{ $translations[$lang]['header']['phone'] }}">
                {{ $translations[$lang]['header']['phone'] }}
            </flux:link>
            <flux:link variant="ghost" href="{{ $translations[$lang]['header']['location_link'] }}">
                {{ $translations[$lang]['header']['location'] }}
            </flux:link>
        </div>
    </section>

    <!-- Education -->
    <section class="pb-2">
        <flux:heading class="mb-2 !text-2xl">{{ $translations[$lang]['education']['title'] }}</flux:heading>
        <flux:separator class="mb-2 hidden print" />
        <div class="space-y-4">
            @foreach ($translations[$lang]['education']['careers'] as $career)
                <div>
                    <div class="sm:flex sm:justify-between">
                        <flux:subheading class="text-zinc-700 dark:text-white/90 !text-lg mb-1">{{ $career['degree'] }}
                        </flux:subheading>
                        <flux:subheading class="text-zinc-700 dark:text-white/90 mb-1 sm:mb-0">{{ $career['years'] }}
                        </flux:subheading>
                    </div>
                    <flux:text>
                        {{ $career['description'] }}
                    </flux:text>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Work experience -->
    <section class="pb-2">
        <flux:heading class="mb-2 !text-2xl">{{ $translations[$lang]['work']['title'] }}</flux:heading>
        <flux:separator class="mb-2 hidden print" />
        <div class="space-y-4">
            @foreach ($translations[$lang]['work']['jobs'] as $job)
                <div>
                    <div class="sm:flex sm:justify-between">
                        <div class="flex items-center gap-4 mb-2">
                            <flux:subheading class="text-zinc-700 dark:text-white/90 !text-lg">{{ $job['position'] }}
                            </flux:subheading>
                            <div class="hidden gap-1 lg:flex">
                                @foreach ($job['skills'] as $skill)
                                    <flux:badge size="sm" variant="pill" class="print-adjust-bg">
                                        {{ $skill }}
                                    </flux:badge>
                                @endforeach
                            </div>
                        </div>

                        <flux:subheading class="text-zinc-700 dark:text-white/90 mb-2 sm:mb-0">{{ $job['years'] }}
                        </flux:subheading>
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

    <!-- Side projects -->
    <section class="no-print">
        <flux:heading class="mb-3 !text-2xl">{{ $translations[$lang]['side_projects']['title'] }}</flux:heading>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($translations[$lang]['side_projects']['projects'] as $project)
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
        <flux:heading class="mb-2 !text-2xl">{{ $translations[$lang]['skills']['title'] }}</flux:heading>
        <flux:separator class="mb-2 hidden print" />

        <div class="no-print">
            <div class="flex flex-wrap w-full gap-1 mt-auto">
                @foreach ($translations[$lang]['skills']['name'] as $skill)
                    <flux:badge size="sm" variant="pill" class="print-adjust-bg">{{ $skill }}
                    </flux:badge>
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
