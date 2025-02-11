<x-app-layout>
    <div class="space-y-12">
        <section class="flex flex-col min-h-[80vh] space-y-6">
            <img class="rounded-full size-24" src="{{ asset('me.webp') }}" alt="Bruno Rossani">

            <div>
                <flux:heading level="1" class="!text-4xl font-black">Bruno Rossani</flux:heading>
                <flux:subheading size="lg">
                    I love creating stuff! I'm an occasional classical guitarist, cooking
                    enthusiast & devoted full-stack coder.<br class="hidden md:flex">
                    You'll find me somewhere in between those lines. I find my passion in the creation of new things,
                    <br class="hidden md:flex">
                    it's the driving force that keeps me going. If you'd like, you can
                    <flux:link rel="noopener noreferrer" target="_blank" href="mailto:brossani23@gmail.com">
                        send me an email.
                    </flux:link>
                </flux:subheading>
            </div>

            <div class="flex gap-6 dark:text-white/70 text-zinc-500">
                <a href="#">
                    <flux:icon.twitter variant="mini" />
                </a>
                <a href="#">
                    <flux:icon.instagram variant="mini" />
                </a>
                <a href="#">
                    <flux:icon.github variant="mini" />
                </a>
                <a href="#">
                    <flux:icon.linkedin variant="mini" />
                </a>
            </div>

            <div class="flex-grow"></div>

            <div class="pb-6">
                @include('components.marquee')
            </div>
        </section>

        <section class="flex flex-col min-h-screen space-y-6">
            <div>
                <flux:heading level="2" class="!text-4xl font-black">My stack</flux:heading>
                <flux:subheading size="lg">
                    Technologies I use on a daily basis.
                </flux:subheading>
            </div>

            <div class="grid max-w-xl grid-cols-1 gap-8 lg:max-w-full lg:grid-cols-2">
                <flux:card
                    class="!border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800 group transition-[hover] duration-200">
                    <div class="flex gap-4">
                        <flux:icon.tailwind />
                        <div class="">
                            <flux:heading level="3" size="lg">Tailwind</flux:heading>
                            <flux:subheading>
                                I chose Tailwind CSS because it allows me to build clean, modern designs quickly without
                                writing
                                extensive custom styles. Its utility-first approach keeps my codebase scalable and
                                maintainable.
                            </flux:subheading>
                        </div>
                    </div>
                </flux:card>

                <flux:card
                    class="!border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800 group transition-[hover] duration-200">
                    <div class="flex gap-4">
                        <flux:icon.alpine />
                        <div class="">
                            <flux:heading level="3" size="lg">Alpine.js</flux:heading>
                            <flux:subheading>
                                Alpine.js is my go-to for adding interactivity to projects without the complexity of
                                larger
                                frameworks. It's lightweight, easy to use, and integrates seamlessly with my Laravel +
                                Livewire
                                stack.
                            </flux:subheading>
                        </div>
                    </div>
                </flux:card>

                <flux:card
                    class="!border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800 group transition-[hover] duration-200">
                    <div class="flex gap-4">
                        <flux:icon.livewire />
                        <div class="">
                            <flux:heading level="3" size="lg">Livewire</flux:heading>
                            <flux:subheading>
                                Livewire enables me to build dynamic, real-time applications in Laravel without writing
                                a
                                single
                                line of JavaScript. It's perfect for keeping development streamlined while delivering
                                great
                                UX.
                            </flux:subheading>
                        </div>
                    </div>
                </flux:card>

                <flux:card
                    class="!border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800 group transition-[hover] duration-200">
                    <div class="flex gap-4">
                        <flux:icon.laravel />
                        <div class="">
                            <flux:heading level="3" size="lg">Laravel</flux:heading>
                            <flux:subheading>
                                Laravel is the backbone of my web development work. Its expressive syntax, powerful
                                features,
                                and built-in tools allow me to build secure, scalable applications with ease.
                            </flux:subheading>
                        </div>
                    </div>
                </flux:card>

                <flux:card
                    class="!border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800 group transition-[hover] duration-200">
                    <div class="flex gap-4">
                        <flux:icon.sqlite />
                        <div class="">
                            <flux:heading level="3" size="lg">SQLite</flux:heading>
                            <flux:subheading>
                                I prefer SQLite for lightweight projects and local development because it's simple,
                                efficient,
                                and requires no server setup. It's ideal for prototyping and small applications.
                            </flux:subheading>
                        </div>
                    </div>
                </flux:card>

                <flux:card
                    class="!border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800 group transition-[hover] duration-200">
                    <div class="flex gap-4">
                        <flux:icon.fly />
                        <div class="">
                            <flux:heading level="3" size="lg">Fly.io</flux:heading>
                            <flux:subheading>
                                I use Fly.io because it makes deploying full-stack applications effortless. Its speed,
                                global
                                distribution, and seamless integration with Laravel make it a great choice for scalable
                                deployments.
                            </flux:subheading>
                        </div>
                    </div>
                </flux:card>
            </div>

            <flux:button as="link" href="/about" wire:navigate variant="subtle" class="mr-auto"
                icon-trailing="arrow-right">More about me</flux:button>
        </section>

        <section class="flex flex-col min-h-screen space-y-6">
            <div>
                <flux:heading level="2" class="!text-4xl font-black">Latest projects</flux:heading>
                <flux:subheading size="lg">
                    Some of the things I build for fun.
                </flux:subheading>
            </div>

            <a target="_blank" href="https://github.com/elkiki99/wevelopers" rel="noopener noreferrer">
                <flux:card
                    class="max-w-xl space-y-3 !border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800 group transition-[hover] duration-200">
                    <div class="flex items-center gap-2">
                        <flux:heading level="3" size="lg">Wevelopers</flux:heading>
                        <flux:icon.arrow-right variant="micro" />
                    </div>
                    <flux:subheading>
                        Wevelopers is a web development learning platform designed for Spanish speakers. It offers a new
                        way to learn interactively through dynamic courses and active community participation.
                    </flux:subheading>
                </flux:card>
            </a>

            <a target="_blank" href="https://github.com/elkiki99/flux-volt-starter-kit" rel="noopener noreferrer">
                <flux:card
                    class="max-w-xl space-y-3 !border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800 group transition-[hover] duration-200">
                    <div class="flex items-center gap-2">
                        <flux:heading level="3" size="lg">Flux UI Starter Kit</flux:heading>
                        <flux:icon.arrow-right variant="micro" />
                    </div>
                    <flux:subheading>
                        A powerful starter kit for building web applications with Laravel, requires a Flux UI
                        subscription.
                        It includes pre-built user and admin dashboards, seamless integration with Laravel Breeze, and
                        dynamic real-time content powered by Livewire.
                    </flux:subheading>
                </flux:card>
            </a>

            <a target="_blank" href="https://github.com/elkiki99/baloloba" rel="noopener noreferrer">
                <flux:card
                    class="max-w-xl space-y-3 !border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800 group transition-[hover] duration-200">
                    <div class="flex items-center gap-2">
                        <flux:heading level="3" size="lg">Balo Loba</flux:heading>
                        <flux:icon.arrow-right variant="micro" />
                    </div>
                    <flux:subheading>
                        Photography portfolio for Balo Loba - independent photographer brand. It features an intuitive
                        interface and a robust admin panel, making it ideal for managing projects, interacting with
                        users,
                        working with photoshoots and streamlining workflows.
                    </flux:subheading>
                </flux:card>
            </a>

            <flux:button as="link" href="/portfolio" wire:navigate variant="subtle" class="mr-auto"
                icon-trailing="arrow-right">More projects</flux:button>
        </section>
    </div>
</x-app-layout>
