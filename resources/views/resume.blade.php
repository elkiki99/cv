<x-app-layout>
    <div class="flex flex-col max-w-3xl min-h-screen mx-auto mt-0 space-y-6 md:mt-12">
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

        <section>
            <flux:heading class="mb-3" size="lg">About</flux:heading>
            <p class="text-sm text-zinc-500 dark:text-zinc-300">I'm a diligent Full Stack Developer with a strong
                commitment to excellence with
                over 1
                year of experience primarily dedicated to Back End development with PHP/Laravel. I'm passionate
                about creating sophisticated web applications and solutions that resonate with users and drive
                success. I'm committed to continuous improvement and delivering projects with maximum effort.
            </p>
        </section>

        <section>
            <flux:heading class="mb-3" size="lg">Work experience</flux:heading>
            <div class="space-y-6">
                <div>
                    <div class="flex items-center gap-2 mb-2">
                        <flux:subheading class="text-zinc-800 dark:text-white">Freelance Developer</flux:subheading>
                        <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">PHP</flux:badge>
                        <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Laravel</flux:badge>
                        <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Web Development</flux:badge>
                        <flux:spacer />
                        <flux:subheading class="text-zinc-800 dark:text-white">2022 - Present</flux:subheading>
                    </div>
                    <p class="text-sm text-zinc-500 dark:text-zinc-300 relative pl-5 before:content-['•'] before:absolute before:left-0">
                        Implemented modern web technologies to deliver high-quality solutions using Laravel, JavaScript, and MySQL.
                    </p>
                    <p class="text-sm text-zinc-500 dark:text-zinc-300 relative pl-5 before:content-['•'] before:absolute before:left-0">
                        Developed and optimized administration panels for efficient content, user, and data management.
                    </p>
                    <p class="text-sm text-zinc-500 dark:text-zinc-300 relative pl-5 before:content-['•'] before:absolute before:left-0">
                        Integrated secure payment gateways such as PayPal and Stripe, implementing token-based authentication.
                    </p>
                    <p class="text-sm text-zinc-500 dark:text-zinc-300 relative pl-5 before:content-['•'] before:absolute before:left-0">
                        Enhanced performance with lazy loading, caching, and HTTP request optimization for better UX.
                    </p>
                </div>
                
                <div>
                    <div class="flex items-center gap-2 mb-2">
                        <flux:subheading class="text-zinc-800 dark:text-white">Store Manager - eDrinks</flux:subheading>
                        <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">E-commerce</flux:badge>
                        <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Retail</flux:badge>
                        <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Operations</flux:badge>
                        <flux:spacer />
                        <flux:subheading class="text-zinc-800 dark:text-white">2024 - Present</flux:subheading>
                    </div>
                    <p class="text-sm text-zinc-500 dark:text-zinc-300 relative pl-5 before:content-['•'] before:absolute before:left-0">
                        Managed daily store operations, optimizing inventory control and sales processes.
                    </p>
                    <p class="text-sm text-zinc-500 dark:text-zinc-300 relative pl-5 before:content-['•'] before:absolute before:left-0">
                        Enhanced e-commerce strategies to boost online presence and sales performance.
                    </p>
                    <p class="text-sm text-zinc-500 dark:text-zinc-300 relative pl-5 before:content-['•'] before:absolute before:left-0">
                        Led customer service initiatives, improving user experience and customer satisfaction.
                    </p>
                    <p class="text-sm text-zinc-500 dark:text-zinc-300 relative pl-5 before:content-['•'] before:absolute before:left-0">
                        Coordinated with suppliers and logistics to streamline procurement and delivery.
                    </p>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
