<x-app-layout>
    <div
        class="flex flex-col max-w-3xl min-h-screen mx-auto space-y-6 print-adjust-spacing print-adjust-width print-adjust-h md:mt-6">
        <!-- Header -->
        <section>
            <div class="flex gap-16">
                <div class="space-y-2">
                    <flux:heading level="1" class="mb-2" size="xl">Bruno Rossani</flux:heading>
                    <p class="text-sm text-zinc-500 dark:text-zinc-300">Full Stack Developer with 2+ years of
                        experience, specializing in Laravel and Back-End solutions. Passionate about building robust
                        web applications that deliver great user experiences.</p>
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
                        <flux:link class="relative pr-5 after:content-['|'] after:absolute after:right-0"
                            href="/">brunorossani.me</flux:link>
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
            <flux:heading class="mb-2" size="lg">About</flux:heading>
            <p class="text-sm text-zinc-500 dark:text-zinc-300">
                I'm a highly motivated Full Stack Developer focused on Back-End development with PHP and Laravel. I
                design and build sophisticated web applications that provide seamless user experiences. I'm committed to
                continuous learning and staying updated with the latest technologies.
            </p>
        </section>

        <!-- Work experience -->
        <section>
            <flux:heading class="mb-2" size="lg">Work Experience</flux:heading>
            <div class="space-y-6">
                <div>
                    <div class="flex items-center gap-4 mb-2">
                        <flux:subheading class="text-zinc-700 dark:text-white/90">Freelance Developer
                        </flux:subheading>
                        <div class="hidden gap-1 md:flex">
                            <flux:badge size="sm" variant="pill" class="print-adjust-bg">PHP</flux:badge>
                            <flux:badge size="sm" variant="pill" class="print-adjust-bg">Laravel</flux:badge>
                            <flux:badge size="sm" variant="pill" class="print-adjust-bg">Web Development
                            </flux:badge>
                        </div>
                        <flux:spacer />
                        <flux:subheading class="text-zinc-700 dark:text-white/90">2023 - Present</flux:subheading>
                    </div>
                    <p
                        class="text-sm text-zinc-500 dark:text-zinc-300 relative pl-5 before:content-['\2022'] before:absolute before:left-0">
                        Built and optimized custom administration panels, streamlining content management, user
                        interactions, and data processing for enhanced operational efficiency.
                    </p>
                    <p
                        class="text-sm text-zinc-500 dark:text-zinc-300 relative pl-5 before:content-['\2022'] before:absolute before:left-0">
                        Integrated secure payment processing systems, including PayPal, Stripe and MercadoPago, ensuring
                        financial transactions through authentication mechanisms.
                    </p>
                    <p
                        class="text-sm text-zinc-500 dark:text-zinc-300 relative pl-5 before:content-['\2022'] before:absolute before:left-0">
                        Enhanced web application performance through lazy loading, caching strategies, and optimization,
                        improving user experience and system responsiveness.
                    </p>
                </div>

                <div>
                    <div class="flex items-center gap-4 mb-2">
                        <flux:subheading class="text-zinc-700 dark:text-white/90">Store Manager - eDrinks
                        </flux:subheading>
                        <div class="hidden gap-1 md:flex">
                            <flux:badge size="sm" variant="pill" class="print-adjust-bg">E-commerce
                            </flux:badge>
                            <flux:badge size="sm" variant="pill" class="print-adjust-bg">Retail
                            </flux:badge>
                            <flux:badge size="sm" variant="pill" class="print-adjust-bg">Operations
                            </flux:badge>
                        </div>
                        <flux:spacer />
                        <flux:subheading class="text-zinc-700 dark:text-white/90">2024 - Present</flux:subheading>
                    </div>
                    <p
                        class="text-sm text-zinc-500 dark:text-zinc-300 relative pl-5 before:content-['\2022'] before:absolute before:left-0">
                        Supervise and optimize daily store operations, ensuring smooth workflow, accurate inventory
                        control, and streamlined sales processes to maximize efficiency and profitability.
                    </p>
                    <p
                        class="text-sm text-zinc-500 dark:text-zinc-300 relative pl-5 before:content-['\2022'] before:absolute before:left-0">
                        Lead customer service improvements, focusing on user experience and satisfaction by refining
                        support protocols and response strategies to maintain high retention rates.
                    </p>
                    <p
                        class="text-sm text-zinc-500 dark:text-zinc-300 relative pl-5 before:content-['\2022'] before:absolute before:left-0">
                        Coordinate with suppliers, logistics teams, and vendors to optimize procurement processes,
                        ensuring timely deliveries and cost-effective supply chain management.
                    </p>
                </div>
            </div>
        </section>

        <!-- Education -->
        <section>
            <flux:heading class="mb-2" size="lg">Education</flux:heading>
            <div class="space-y-6">
                <div>
                    <div class="flex items-center gap-2 mb-2">
                        <flux:subheading class="text-zinc-700 dark:text-white/90">UTEC IT Technologist Career
                        </flux:subheading>
                        <flux:spacer />
                        <flux:subheading class="text-zinc-700 dark:text-white/90">2025 - Present</flux:subheading>
                    </div>
                    <p class="text-sm text-zinc-500 dark:text-zinc-300">
                        Currently pursuing a degree in IT at UTEC, focusing on software development, system
                        architecture, and database management.
                    </p>
                </div>

                <div>
                    <div class="flex items-center gap-2 mb-2">
                        <flux:subheading class="text-zinc-700 dark:text-white/90">Fine Arts Faculty of Udelar
                        </flux:subheading>
                        <flux:spacer />
                        <flux:subheading class="text-zinc-700 dark:text-white/90">2019 - 2023</flux:subheading>
                    </div>
                    <p class="text-sm text-zinc-500 dark:text-zinc-300">
                        Studyied applied musical analysis and instrumental performance, developed advanced technical
                        skills and problem-solving abilities.
                    </p>
                </div>
            </div>
        </section>

        <!-- Side projects -->
        <section class="no-print">
            <flux:heading class="mb-2" size="lg">Side projects</flux:heading>

            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                <div>
                    <flux:card
                        class="!bg-transparent !p-4 space-y-3 h-full flex flex-col print-remove-b print-adjust-p">
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-2">
                                <flux:link href="https://github.com/elkiki99/wevelopers" rel="noopener noreferrer"
                                    target="_blank" class="text-sm text-zinc-700 dark:text-white/90">Wevelopers
                                </flux:link>
                                <div class="bg-green-500 rounded-full size-1.5 pulse"></div>
                            </div>
                            <flux:subheading>Interactive web development learning platform for Spanish speakers.
                            </flux:subheading>
                        </div>

                        <div class="flex flex-wrap w-full gap-1 mt-auto">
                            <flux:badge size="sm" variant="pill" class="print-adjust-bg">Side
                                project
                            </flux:badge>
                            <flux:badge size="sm" variant="pill" class="print-adjust-bg">PHP
                            </flux:badge>
                            <flux:badge size="sm" variant="pill" class="print-adjust-bg">
                                Javascript
                            </flux:badge>
                            <flux:badge size="sm" variant="pill" class="print-adjust-bg">
                                Education</flux:badge>
                        </div>
                    </flux:card>
                </div>

                <flux:card class="!bg-transparent !p-4 space-y-3 h-full flex flex-col print-remove-b print-adjust-p">
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-2">
                            <flux:link href="https://github.com/elkiki99/baloloba" rel="noopener noreferrer"
                                target="_blank" class="text-sm text-zinc-700 dark:text-white/90">Balo Loba</flux:link>
                            <div class="bg-green-500 rounded-full size-1.5 pulse"></div>
                        </div>
                        <flux:subheading>Photography portfolio for an independent photographer brand.</flux:subheading>
                    </div>

                    <div class="flex flex-wrap w-full gap-1 mt-auto">
                        <flux:badge size="sm" variant="pill" class="print-adjust-bg">
                            Freelance
                            job
                        </flux:badge>
                        <flux:badge size="sm" variant="pill" class="print-adjust-bg">Laravel
                        </flux:badge>
                        <flux:badge size="sm" variant="pill" class="print-adjust-bg">Admin
                            panel
                        </flux:badge>
                        <flux:badge size="sm" variant="pill" class="print-adjust-bg">
                            Mercadopago</flux:badge>
                    </div>
                </flux:card>

                <flux:card class="!bg-transparent !p-4 space-y-3 h-full flex flex-col print-remove-b print-adjust-p">
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-2">
                            <flux:link href="https://github.com/elkiki99/devwebcamp" rel="noopener noreferrer"
                                target="_blank" class="text-sm text-zinc-700 dark:text-white/90">DevWebCamp
                            </flux:link>
                            <div class="bg-green-500 rounded-full size-1.5 pulse"></div>
                        </div>
                        <flux:subheading>Event management site with PayPal, virtual tickets, and email verification.
                        </flux:subheading>
                    </div>

                    <div class="flex flex-wrap w-full gap-1 mt-auto">
                        <flux:badge size="sm" variant="pill" class="print-adjust-bg">Side
                            project
                        </flux:badge>
                        <flux:badge size="sm" variant="pill" class="print-adjust-bg">CSS
                        </flux:badge>
                        <flux:badge size="sm" variant="pill" class="print-adjust-bg">
                            Javascript
                        </flux:badge>
                        <flux:badge size="sm" variant="pill" class="print-adjust-bg">Event
                            website
                        </flux:badge>
                    </div>
                </flux:card>
            </div>
        </section>

        <!-- Skills -->
        <section>
            <flux:heading class="mb-2" size="lg">Skills</flux:heading>
            <div class="flex flex-wrap w-full gap-1 mt-auto">
                <flux:badge size="sm" variant="pill" class="print-adjust-bg">Laravel</flux:badge>
                <flux:badge size="sm" variant="pill" class="print-adjust-bg">Livewire</flux:badge>
                <flux:badge size="sm" variant="pill" class="print-adjust-bg">Tailwind CSS</flux:badge>
                <flux:badge size="sm" variant="pill" class="print-adjust-bg">PHP</flux:badge>
                <flux:badge size="sm" variant="pill" class="print-adjust-bg">MySQL</flux:badge>
                <flux:badge size="sm" variant="pill" class="print-adjust-bg">UX/UI Design</flux:badge>
                <flux:badge size="sm" variant="pill" class="print-adjust-bg">Git</flux:badge>
                <flux:badge size="sm" variant="pill" class="print-adjust-bg">SEO</flux:badge>
                <flux:badge size="sm" variant="pill" class="print-adjust-bg">Javascript/Alpine.js</flux:badge>
                <flux:badge size="sm" variant="pill" class="print-adjust-bg">React</flux:badge>
                <flux:badge size="sm" variant="pill" class="print-adjust-bg">SQLite</flux:badge>
                <flux:badge size="sm" variant="pill" class="print-adjust-bg">AWS</flux:badge>
                <flux:badge size="sm" variant="pill" class="print-adjust-bg">Fly.io</flux:badge>
                <flux:badge size="sm" variant="pill" class="print-adjust-bg">Github</flux:badge>
            </div>
        </section>
    </div>
</x-app-layout>
