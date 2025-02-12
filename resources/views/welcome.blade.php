<x-app-layout>
    <div class="space-y-12">
        <!-- Header -->
        <section class="flex flex-col min-h-[80vh] print-adjust-h space-y-6">
            <img class="rounded-full size-24" src="{{ asset('me.webp') }}" alt="Bruno Rossani">

            <div class="space-y-2">
                <flux:heading level="1" class="!text-4xl font-black">Bruno Rossani</flux:heading>
                <p class="text-base text-zinc-500 dark:text-white/70">
                    I love creating stuff! I'm an occasional classical guitarist, cooking
                    enthusiast & devoted full-stack coder.<br class="hidden md:flex">
                    You'll find me somewhere in between those lines. I find my passion in the creation of new things,
                    <br class="hidden md:flex">
                    it's the driving force that keeps me going. If you'd like, you can
                    <flux:link rel="noopener noreferrer" target="_blank" href="mailto:brossani23@gmail.com">
                        send me an email.
                    </flux:link>
                </p>
            </div>

            @include('components.socials')

            <div class="flex-grow no-print"></div>

            <div class="pb-6 no-print">
                @include('components.marquee')
            </div>
        </section>

        <!-- My stack -->
        <section class="flex flex-col min-h-screen print-adjust-h">
            <div class="mb-6">
                <flux:heading level="2" size="xl">My stack</flux:heading>
                <flux:subheading size="lg">
                    Technologies I use on a daily basis.
                </flux:subheading>
            </div>

            <div class="space-y-6 print-adjust-spacing">
                <div class="grid max-w-xl grid-cols-1 gap-4 print-adjust-width lg:max-w-full lg:grid-cols-2">
                    <flux:card
                        class="!border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800 group transition-none hover:transition-colors duration-200 print-adjust-p">
                        <div class="flex gap-4">
                            <flux:icon.tailwind class="no-print" />
                            <div class="space-y-2">
                                <flux:heading level="3" size="lg">Tailwind</flux:heading>
                                <p class="text-sm text-zinc-500 dark:text-white/70">
                                    I chose Tailwind CSS because it allows me to build clean, modern designs quickly
                                    without
                                    writing
                                    extensive custom styles. Its utility-first approach keeps my codebase scalable and
                                    maintainable.
                                </p>
                            </div>
                        </div>
                    </flux:card>

                    <flux:card
                        class="!border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800 group transition-none hover:transition-colors duration-200 print-adjust-p">
                        <div class="flex gap-4">
                            <flux:icon.alpine class="no-print" />
                            <div class="space-y-2">
                                <flux:heading level="3" size="lg">Alpine.js</flux:heading>
                                <p class="text-sm text-zinc-500 dark:text-white/70">
                                    Alpine.js is my go-to for adding interactivity to projects without the complexity of
                                    larger
                                    frameworks. It's lightweight, easy to use, and integrates seamlessly with my Laravel
                                    +
                                    Livewire
                                    stack.
                                </p>
                            </div>
                        </div>
                    </flux:card>

                    <flux:card
                        class="!border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800 group transition-none hover:transition-colors duration-200 print-adjust-p">
                        <div class="flex gap-4">
                            <flux:icon.livewire class="no-print" />
                            <div class="space-y-2">
                                <flux:heading level="3" size="lg">Livewire</flux:heading>
                                <p class="text-sm text-zinc-500 dark:text-white/70">
                                    Livewire enables me to build dynamic, real-time applications in Laravel without
                                    writing
                                    a
                                    single
                                    line of JavaScript. It's perfect for keeping development streamlined while
                                    delivering
                                    great
                                    UX.
                                </p>
                            </div>
                        </div>
                    </flux:card>

                    <flux:card
                        class="!border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800 group transition-none hover:transition-colors duration-200 print-adjust-p">
                        <div class="flex gap-4">
                            <flux:icon.laravel class="no-print" />
                            <div class="space-y-2">
                                <flux:heading level="3" size="lg">Laravel</flux:heading>
                                <p class="text-sm text-zinc-500 dark:text-white/70">
                                    Laravel is the backbone of my web development work. Its expressive syntax, powerful
                                    features,
                                    and built-in tools allow me to build secure, scalable applications with ease.
                                </p>
                            </div>
                        </div>
                    </flux:card>

                    <flux:card
                        class="!border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800 group transition-none hover:transition-colors duration-200 print-adjust-p">
                        <div class="flex gap-4">
                            <flux:icon.sqlite class="no-print" />
                            <div class="space-y-2">
                                <flux:heading level="3" size="lg">SQLite</flux:heading>
                                <p class="text-sm text-zinc-500 dark:text-white/70">
                                    I prefer SQLite for lightweight projects and local development because it's simple,
                                    efficient,
                                    and requires no server setup. It's ideal for prototyping and small applications.
                                </p>
                            </div>
                        </div>
                    </flux:card>

                    <flux:card
                        class="!border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800 group transition-none hover:transition-colors duration-200 print-adjust-p">
                        <div class="flex gap-4">
                            <flux:icon.fly class="no-print" />
                            <div class="space-y-2">
                                <flux:heading level="3" size="lg">Fly.io</flux:heading>
                                <p class="text-sm text-zinc-500 dark:text-white/70">
                                    I use Fly.io because it makes deploying full-stack applications effortless. Its
                                    speed,
                                    global
                                    distribution, and seamless integration with Laravel make it a great choice for
                                    scalable
                                    deployments.
                                </p>
                            </div>
                        </div>
                    </flux:card>
                </div>

                <flux:button as="link" href="/about" wire:navigate variant="subtle" class="mr-auto no-print"
                    icon-trailing="arrow-right">More about me</flux:button>
            </div>
        </section>

        <!-- Latest projects -->
        <section class="flex flex-col min-h-screen print-adjust-h">
            <div class="mb-6">
                <flux:heading level="2" size="xl">Latest projects</flux:heading>
                <flux:subheading size="lg">
                    Some of the things I build for fun.
                </flux:subheading>
            </div>

            <div class="space-y-6 print-adjust-spacing">
                <flux:card
                    class="max-w-xl print-adjust-width !border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800 group transition-none hover:transition-colors duration-200 print-adjust-p">
                    <a target="_blank" href="https://github.com/elkiki99/wevelopers" rel="noopener noreferrer">
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <flux:heading level="3" size="lg">Wevelopers</flux:heading>
                                <flux:icon.arrow-right variant="micro" class="no-print" />
                            </div>
                            <p class="text-sm text-zinc-500 dark:text-white/70">
                                Wevelopers is a web development learning platform designed for Spanish speakers. It
                                offers a
                                new
                                way to learn interactively through dynamic courses and active community participation.
                            </p>
                        </div>
                    </a>
                </flux:card>

                <flux:card
                    class="max-w-xl print-adjust-width !border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800 group transition-none hover:transition-colors duration-200 print-adjust-p">
                    <a target="_blank" href="https://github.com/elkiki99/flux-volt-starter-kit"
                        rel="noopener noreferrer">
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <flux:heading level="3" size="lg">Flux UI Starter Kit</flux:heading>
                                <flux:icon.arrow-right variant="micro" class="no-print" />
                            </div>
                            <p class="text-sm text-zinc-500 dark:text-white/70">
                                A powerful starter kit for building web applications with Laravel, requires a Flux UI
                                subscription.
                                It includes pre-built user and admin dashboards, seamless integration with Laravel
                                Breeze,
                                and
                                dynamic real-time content powered by Livewire.
                            </p>
                        </div>
                    </a>
                </flux:card>

                <flux:card
                    class="max-w-xl print-adjust-width !border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800 group transition-none hover:transition-colors duration-200 print-adjust-p">
                    <a target="_blank" href="https://github.com/elkiki99/baloloba" rel="noopener noreferrer">
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <flux:heading level="3" size="lg">Balo Loba</flux:heading>
                                <flux:icon.arrow-right variant="micro" class="no-print" />
                            </div>
                            <p class="text-sm text-zinc-500 dark:text-white/70">
                                Photography portfolio for Balo Loba - independent photographer brand. It features an
                                intuitive
                                interface and a robust admin panel, making it ideal for managing projects, interacting
                                with
                                users,
                                working with photoshoots and streamlining workflows.
                            </p>
                        </div>
                    </a>
                </flux:card>

                <flux:button as="link" href="/portfolio" wire:navigate variant="subtle"
                    class="mr-auto no-print" icon-trailing="arrow-right">More projects</flux:button>
            </div>
        </section>
    </div>
</x-app-layout>
