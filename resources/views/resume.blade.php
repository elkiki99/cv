<x-app-layout>
    <div class="flex flex-col max-w-3xl min-h-screen mx-auto mt-0 space-y-6 md:mt-12">
        <!-- Header -->
        <section>
            <div class="flex gap-16">
                <div class="space-y-3">
                    <div>
                        <flux:heading level="1" class="mb-2" size="xl">Bruno Rossani</flux:heading>
                        <p class="text-sm text-zinc-500 dark:text-zinc-300">Full Stack developer with +2 years of
                            experience, specializing in Laravel and
                            Back
                            End
                            solutions. I am driven by building robust web applications and solutions that provide great
                            user
                            experiences.</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <flux:icon.globe-americas variant="micro" />
                        <flux:subheading>Montevideo, Uruguay</flux:subheading>
                    </div>
                    <div class="flex gap-2">
                        <flux:button size="sm" as="link" wire:navigate href="/" icon="globe-alt">
                        </flux:button>
                        <flux:button size="sm" as="link" href="mailto:brossani23@gmail.com" target="_blank"
                            rel="noopener noreferrer" icon="envelope"></flux:button>
                        <flux:button size="sm" as="link" href="https://github.com/elkiki99" target="_blank"
                            rel="noopener noreferrer" icon="github"></flux:button>
                        <flux:button size="sm" as="link" href="https://www.linkedin.com/in/brunorossani/"
                            target="_blank" rel="noopener noreferrer" icon="linkedin"></flux:button>
                    </div>
                </div>

                <img src="{{ asset('me.webp') }}" class="rounded-lg size-24">
            </div>
        </section>

        <!-- About -->
        <section>
            <flux:heading class="mb-3" size="lg">About</flux:heading>
            <p class="text-sm text-zinc-500 dark:text-zinc-300">
                I am a meticulous and highly motivated Full Stack Developer with a strong commitment to delivering
                high-quality software solutions. With over two years of hands-on experience, I have primarily focused on
                Back-End development using PHP and the Laravel framework. My passion lies in designing and developing
                sophisticated web applications that provide seamless user experiences and drive business success. I am
                dedicated to continuous learning and improvement, always striving to refine my skills and stay up to
                date with the latest technological advancements to ensure efficient, scalable, and secure solutions.
            </p>
        </section>

        <!-- Work experience -->
        <section>
            <flux:heading class="mb-3" size="lg">Work Experience</flux:heading>
            <div class="space-y-6">
                <div>
                    <div class="flex items-center gap-1 mb-2">
                        <flux:subheading class="!text-zinc-700 dark:!text-white/90 mr-2">Freelance Developer
                        </flux:subheading>
                        <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">PHP</flux:badge>
                        <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Laravel</flux:badge>
                        <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Web Development
                        </flux:badge>
                        <flux:spacer />
                        <flux:subheading class="!text-zinc-700 dark:!text-white/90">2022 - Present</flux:subheading>
                    </div>
                    <p
                        class="text-sm text-zinc-500 dark:text-zinc-300 relative pl-5 before:content-['•'] before:absolute before:left-0">
                        Designed, developed, and deployed modern web applications utilizing Laravel, JavaScript, and
                        MySQL to create high-performance and maintainable software solutions.
                    </p>
                    <p
                        class="text-sm text-zinc-500 dark:text-zinc-300 relative pl-5 before:content-['•'] before:absolute before:left-0">
                        Built and optimized custom administration panels, streamlining content management, user
                        interactions, and data processing for enhanced operational efficiency.
                    </p>
                    <p
                        class="text-sm text-zinc-500 dark:text-zinc-300 relative pl-5 before:content-['•'] before:absolute before:left-0">
                        Integrated secure payment processing systems, including PayPal, Stripe and MercadoPago, ensuring
                        financial transactions through authentication mechanisms.
                    </p>
                    <p
                        class="text-sm text-zinc-500 dark:text-zinc-300 relative pl-5 before:content-['•'] before:absolute before:left-0">
                        Enhanced web application performance through lazy loading, caching strategies, and optimization,
                        improving user experience and system responsiveness.
                    </p>
                </div>

                <div>
                    <div class="flex items-center gap-1 mb-2">
                        <flux:subheading class="!text-zinc-700 dark:!text-white/90 mr-2">Store Manager - eDrinks
                        </flux:subheading>
                        <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">E-commerce</flux:badge>
                        <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Retail</flux:badge>
                        <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Operations</flux:badge>
                        <flux:spacer />
                        <flux:subheading class="!text-zinc-700 dark:!text-white/90">2024 - Present</flux:subheading>
                    </div>
                    <p
                        class="text-sm text-zinc-500 dark:text-zinc-300 relative pl-5 before:content-['•'] before:absolute before:left-0">
                        Supervised and optimized daily store operations, ensuring smooth workflow, accurate inventory
                        control, and streamlined sales processes to maximize efficiency and profitability.
                    </p>
                    <p
                        class="text-sm text-zinc-500 dark:text-zinc-300 relative pl-5 before:content-['•'] before:absolute before:left-0">
                        Implemented strategic e-commerce initiatives, enhancing online visibility, customer engagement,
                        and sales performance through targeted marketing and promotional efforts.
                    </p>
                    <p
                        class="text-sm text-zinc-500 dark:text-zinc-300 relative pl-5 before:content-['•'] before:absolute before:left-0">
                        Led customer service improvements, focusing on user experience and satisfaction by refining
                        support protocols and response strategies to maintain high retention rates.
                    </p>
                    <p
                        class="text-sm text-zinc-500 dark:text-zinc-300 relative pl-5 before:content-['•'] before:absolute before:left-0">
                        Coordinated with suppliers, logistics teams, and vendors to optimize procurement processes,
                        ensuring timely deliveries and cost-effective supply chain management.
                    </p>
                </div>
            </div>
        </section>

        <!-- Education -->
        <section>
            <flux:heading class="mb-3" size="lg">Education</flux:heading>
            <div class="space-y-6">
                <div>
                    <div class="flex items-center gap-2 mb-2">
                        <flux:subheading class="!text-zinc-700 dark:!text-white/90">UTEC IT Technologist Career
                        </flux:subheading>
                        <flux:spacer />
                        <flux:subheading class="!text-zinc-700 dark:!text-white/90">2025 - Present</flux:subheading>
                    </div>
                    <p class="text-sm text-zinc-500 dark:text-zinc-300">
                        Pursuing a degree in IT Technologist with a comprehensive focus on software development, system
                        architecture, and database management. This program equips me with the technical expertise
                        necessary to design, develop, and optimize scalable and high-performance applications while
                        staying at the forefront of emerging technologies.
                    </p>
                </div>

                <div>
                    <div class="flex items-center gap-2 mb-2">
                        <flux:subheading class="!text-zinc-700 dark:!text-white/90">Fine Arts Faculty of UdelaR
                        </flux:subheading>
                        <flux:spacer />
                        <flux:subheading class="!text-zinc-700 dark:!text-white/90">2022 - Present</flux:subheading>
                    </div>
                    <p class="text-sm text-zinc-500 dark:text-zinc-300">
                        Studying applied musical analysis and performance, developing strong technical proficiency in
                        instrumental execution and an exceptional ability for sight-reading music. My experience in
                        advanced technical development and artistic interpretation has allowed me to cultivate a deep
                        appreciation for precision, discipline, and continuous improvement, qualities that translate
                        into my approach to problem-solving.
                    </p>
                </div>
            </div>
        </section>

        <!-- Side projects -->
        <section>
            <flux:heading class="mb-3" size="lg">Side projects</flux:heading>

            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                <div>
                    <flux:card class="!bg-transparent !p-4 space-y-3 h-full flex flex-col">
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
                            <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/10 !bg-zinc-400/5">Side project
                            </flux:badge>
                            <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/10 !bg-zinc-400/5">PHP
                            </flux:badge>
                            <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/10 !bg-zinc-400/5">Javascript
                            </flux:badge>
                            <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/10 !bg-zinc-400/5">
                                Education</flux:badge>
                        </div>
                    </flux:card>
                </div>

                <flux:card class="!bg-transparent !p-4 space-y-3 h-full flex flex-col">
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-2">
                            <flux:link href="https://github.com/elkiki99/baloloba" rel="noopener noreferrer"
                                target="_blank" class="text-sm text-zinc-700 dark:text-white/90">Balo Loba</flux:link>
                            <div class="bg-green-500 rounded-full size-1.5 pulse"></div>
                        </div>
                        <flux:subheading>Photography portfolio for an independent photographer brand.</flux:subheading>
                    </div>

                    <div class="flex flex-wrap w-full gap-1 mt-auto">
                        <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/10 !bg-zinc-400/5">Freelance
                            job
                        </flux:badge>
                        <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/10 !bg-zinc-400/5">Laravel
                        </flux:badge>
                        <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/10 !bg-zinc-400/5">Admin
                            panel
                        </flux:badge>
                        <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/10 !bg-zinc-400/5">
                            Mercadopago</flux:badge>
                    </div>
                </flux:card>

                <flux:card class="!bg-transparent !p-4 space-y-3 h-full flex flex-col">
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
                        <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/10 !bg-zinc-400/5">Side
                            project
                        </flux:badge>
                        <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/10 !bg-zinc-400/5">CSS
                        </flux:badge>
                        <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/10 !bg-zinc-400/5">Javascript
                        </flux:badge>
                        <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/10 !bg-zinc-400/5">Event
                            website
                        </flux:badge>
                    </div>
                </flux:card>
            </div>
        </section>

        <!-- Skills -->
        <section>
            <flux:heading class="mb-3" size="lg">Skills</flux:heading>
            <div class="flex flex-wrap w-full gap-1 mt-auto">
                <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Laravel</flux:badge>
                <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Livewire</flux:badge>
                <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Tailwind CSS</flux:badge>
                <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">PHP</flux:badge>
                <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">MySQL</flux:badge>
                <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">API Development</flux:badge>
                <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">UX/UI Design</flux:badge>
                <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Git</flux:badge>
                <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">SEO</flux:badge>
                <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Native spanish</flux:badge>
                <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Fluent english</flux:badge>
                <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Javascript/Alpine.js</flux:badge>
                <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">React</flux:badge>
                <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">SQLite</flux:badge>
                <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">AWS</flux:badge>
                <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Performance Optimization</flux:badge>
                <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Fly.io</flux:badge>
                <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Problem solving</flux:badge>
            </div>
        </section>
    </div>
</x-app-layout>
