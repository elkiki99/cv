<x-app-layout class="space-y-12">
    <section class="flex flex-col min-h-screen mt-0 mb-6 md:mt-12">
        <div class="space-y-6">
            <div class="space-y-3">
                <flux:heading level="1" class="!text-4xl font-black">Things I've made trying to leave<br
                        class="hidden md:flex"> a mark in the digital world</flux:heading>
                <flux:subheading size="lg">
                    A list of projects I've worked on, I'm working on and I will work on.
                </flux:subheading>
            </div>

            <div class="grid max-w-xl grid-cols-1 gap-8 pt-6 md:max-w-full md:grid-cols-2 lg:max-w-full lg:grid-cols-3">
                <flux:card
                    class="!border-none hover:cursor-pointer !bg-transparent group transition-none hover:transition-colors duration-200 hover:!bg-zinc-100 dark:hover:!bg-zinc-800">
                    <a rel="noreferrer noopener" target="_blank" href="https://github.com/elkiki99/wevelopers">
                        <div class="flex flex-col h-full space-y-6">
                            <flux:icon.wevelopers class="size-10" />
                            <div class="space-y-3">
                                <div class="flex items-center gap-2">
                                    <flux:heading level="2" size="lg">Wevelopers</flux:heading>
                                    <flux:badge size="sm" icon="wrench" color="green">In progress</flux:badge>
                                </div>
                                <flux:subheading>
                                    Interactive web development learning platform for Spanish speakers.
                                </flux:subheading>
                            </div>
                            <div class="flex-1">
                                <div class="flex flex-wrap w-full gap-1">
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Side project
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">PHP
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Javascript
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Learning
                                        platform</flux:badge>
                                </div>
                            </div>

                            <div class="flex items-center gap-2 mt-auto">
                                <flux:icon.link variant="micro" />
                                <p class="inline font-medium underline-offset-[6px] transition-none hover:transition-colors duration-200 group-hover:decoration-current underline text-[var(--color-accent-content)] decoration-[color-mix(in_oklab,var(--color-accent-content),transparent_80%)] !text-sm"
                                    class="!text-sm">
                                    github.com/elkiki99/wevelopers</p>
                                <div class="bg-green-500 rounded-full size-1.5 pulse"></div>
                            </div>
                        </div>
                    </a>
                </flux:card>

                <flux:card
                    class="!border-none hover:cursor-pointer !bg-transparent group transition-none hover:transition-colors duration-200 hover:!bg-zinc-100 dark:hover:!bg-zinc-800">
                    <a rel="noreferrer noopener" target="_blank" href="https://github.com/elkiki99/digizen">
                        <div class="flex flex-col h-full space-y-6">
                            <flux:icon.digizen class="size-10" />
                            <div class="space-y-3">
                                <flux:heading level="2" size="lg">Digizen</flux:heading>
                                <flux:subheading>
                                    Digital agency template using FluxUI Livewire Components.
                                </flux:subheading>
                            </div>
                            <div class="flex-1">
                                <div class="flex flex-wrap w-full gap-1">
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Side project
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Blade
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">PHP
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Digital
                                        agency</flux:badge>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mt-auto">
                                <flux:icon.link variant="micro" />
                                <p class="inline font-medium underline-offset-[6px] transition-none hover:transition-colors duration-200 group-hover:decoration-current underline text-[var(--color-accent-content)] decoration-[color-mix(in_oklab,var(--color-accent-content),transparent_80%)] !text-sm"
                                    class="!text-sm">
                                    github.com/elkiki99/digizen</p>
                                <div class="bg-green-500 rounded-full size-1.5 pulse"></div>
                            </div>
                        </div>
                    </a>
                </flux:card>

                <flux:card
                    class="!border-none hover:cursor-pointer !bg-transparent group transition-none hover:transition-colors duration-200 hover:!bg-zinc-100 dark:hover:!bg-zinc-800">
                    <a rel="noreferrer noopener" target="_blank"
                        href="https://github.com/elkiki99/flux-volt-starter-kit">
                        <div class="flex flex-col h-full space-y-6">
                            <flux:icon.flux class="size-10" />
                            <div>
                                <flux:heading level="2" size="lg">Flux UI Starter Kit</flux:heading>
                                <flux:subheading>
                                    Laravel starter kit with admin/user dashboards and Livewire.
                                </flux:subheading>
                            </div>
                            <div class="flex-1">

                                <div class="flex flex-wrap w-full gap-1">
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Side project
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Flux UI
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Livewire
                                        components
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Starter kit
                                    </flux:badge>
                                </div>
                            </div>

                            <div class="flex items-center gap-2 mt-auto">
                                <flux:icon.link variant="micro" />
                                <p class="inline font-medium underline-offset-[6px] transition-none hover:transition-colors duration-200 group-hover:decoration-current underline text-[var(--color-accent-content)] decoration-[color-mix(in_oklab,var(--color-accent-content),transparent_80%)] !text-sm"
                                    class="!text-sm">
                                    github.com/elkiki99/flux-volt-starter-kit</p>
                                <div class="bg-green-500 rounded-full size-1.5 pulse"></div>
                            </div>
                        </div>
                    </a>
                </flux:card>

                <flux:card
                    class="!border-none hover:cursor-pointer !bg-transparent group transition-none hover:transition-colors duration-200 hover:!bg-zinc-100 dark:hover:!bg-zinc-800">
                    <a rel="noreferrer noopener" target="_blank" href="https://github.com/elkiki99/baloloba">
                        <div class="flex flex-col h-full space-y-6">
                            <flux:icon.baloloba class="size-10" />
                            <div>
                                <flux:heading level="2" size="lg">Balo Loba</flux:heading>
                                <flux:subheading>
                                    Photography portfolio for an independent photographer brand.
                                </flux:subheading>
                            </div>
                            <div class="flex-1">

                                <div class="flex flex-wrap w-full gap-1">
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Freelance
                                        job
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Laravel
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Admin
                                        panel
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">
                                        Mercadopago</flux:badge>
                                </div>
                            </div>

                            <div class="flex items-center gap-2 mt-auto">
                                <flux:icon.link variant="micro" />
                                <p class="inline font-medium underline-offset-[6px] transition-none hover:transition-colors duration-200 group-hover:decoration-current underline text-[var(--color-accent-content)] decoration-[color-mix(in_oklab,var(--color-accent-content),transparent_80%)] !text-sm"
                                    class="!text-sm">
                                    github.com/elkiki99/baloloba</p>
                                <div class="bg-green-500 rounded-full size-1.5 pulse"></div>
                            </div>
                        </div>
                    </a>
                </flux:card>

                <flux:card
                    class="!border-none hover:cursor-pointer !bg-transparent group transition-none hover:transition-colors duration-200 hover:!bg-zinc-100 dark:hover:!bg-zinc-800">
                    <a rel="noreferrer noopener" target="_blank" href="https://github.com/elkiki99/laraflix">
                        <div class="flex flex-col h-full space-y-6">
                            <flux:icon.laraflix class="size-10" />
                            <div>
                                <flux:heading level="2" size="lg">Laraflix</flux:heading>
                                <flux:subheading>
                                    Netflix-inspired movie portal using TALL Stack and TMDB API.
                                </flux:subheading>
                            </div>
                            <div class="flex-1">

                                <div class="flex flex-wrap w-full gap-1">
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Side
                                        project
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Laravel
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">APIs
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Movie
                                        portal</flux:badge>
                                </div>
                            </div>

                            <div class="flex items-center gap-2 mt-auto">
                                <flux:icon.link variant="micro" />
                                <p class="inline font-medium underline-offset-[6px] transition-none hover:transition-colors duration-200 group-hover:decoration-current underline text-[var(--color-accent-content)] decoration-[color-mix(in_oklab,var(--color-accent-content),transparent_80%)] !text-sm"
                                    class="!text-sm">
                                    github.com/elkiki99/laraflix</p>
                                <div class="bg-green-500 rounded-full size-1.5 pulse"></div>
                            </div>
                        </div>
                    </a>
                </flux:card>

                <flux:card
                    class="!border-none hover:cursor-pointer !bg-transparent group transition-none hover:transition-colors duration-200 hover:!bg-zinc-100 dark:hover:!bg-zinc-800">
                    <a rel="noreferrer noopener" target="_blank" href="https://github.com/elkiki99/Chat">
                        <div class="flex flex-col h-full space-y-6">
                            <flux:icon.chat-app class="size-10" />
                            <div>
                                <flux:heading level="2" size="lg">Chat App</flux:heading>
                                <flux:subheading>
                                    Web-inspired chat app built with Laravel and Reverb
                                </flux:subheading>
                            </div>
                            <div class="flex-1">

                                <div class="flex flex-wrap w-full gap-1">
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Side
                                        project
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Alpine.js
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Websockets
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Chat
                                        application</flux:badge>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mt-auto">
                                <flux:icon.link variant="micro" />
                                <p class="inline font-medium underline-offset-[6px] transition-none hover:transition-colors duration-200 group-hover:decoration-current underline text-[var(--color-accent-content)] decoration-[color-mix(in_oklab,var(--color-accent-content),transparent_80%)] !text-sm"
                                    class="!text-sm">
                                    github.com/elkiki99/chat</p>
                                <div class="bg-green-500 rounded-full size-1.5 pulse"></div>
                            </div>
                        </div>
                    </a>
                </flux:card>

                <flux:card
                    class="!border-none hover:cursor-pointer !bg-transparent group transition-none hover:transition-colors duration-200 hover:!bg-zinc-100 dark:hover:!bg-zinc-800">
                    <a rel="noreferrer noopener" target="_blank" href="https://github.com/elkiki99/jobs">
                        <div class="flex flex-col h-full space-y-6">
                            <flux:icon.jobs class="size-10" />
                            <div>
                                <flux:heading level="2" size="lg">Jobs</flux:heading>
                                <flux:subheading>
                                    Job portal with CV management, job posts, and company profiles.
                                </flux:subheading>
                            </div>
                            <div class="flex-1">

                                <div class="flex flex-wrap w-full gap-1">
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Side
                                        project
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Laravel
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Livewire
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Job board
                                    </flux:badge>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mt-auto">
                                <flux:icon.link variant="micro" />
                                <p class="inline font-medium underline-offset-[6px] transition-none hover:transition-colors duration-200 group-hover:decoration-current underline text-[var(--color-accent-content)] decoration-[color-mix(in_oklab,var(--color-accent-content),transparent_80%)] !text-sm"
                                    class="!text-sm">
                                    github.com/elkiki99/jobs</p>
                                <div class="bg-green-500 rounded-full size-1.5 pulse"></div>
                            </div>
                        </div>
                    </a>
                </flux:card>

                <flux:card
                    class="!border-none hover:cursor-pointer !bg-transparent group transition-none hover:transition-colors duration-200 hover:!bg-zinc-100 dark:hover:!bg-zinc-800">
                    <a rel="noreferrer noopener" target="_blank"
                        href="https://github.com/elkiki99/The-Edifice-Gazette">
                        <div class="flex flex-col h-full space-y-6">
                            <flux:icon.the-edifice-gazette class="size-10" />
                            <div>
                                <flux:heading level="2" size="lg">The Edifice Gazette</flux:heading>
                                <flux:subheading>
                                    Laravel blog template with content management and user roles.
                                </flux:subheading>
                            </div>
                            <div class="flex-1">

                                <div class="flex flex-wrap w-full gap-1">
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Side
                                        project
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">
                                        TailwindCSS
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Stripe
                                        intgegration
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">CMS
                                    </flux:badge>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mt-auto">
                                <flux:icon.link variant="micro" />
                                <p class="inline font-medium underline-offset-[6px] transition-none hover:transition-colors duration-200 group-hover:decoration-current underline text-[var(--color-accent-content)] decoration-[color-mix(in_oklab,var(--color-accent-content),transparent_80%)] !text-sm"
                                    class="!text-sm">
                                    github.com/elkiki99/The-Edifice-Gazette</p>
                                <div class="bg-green-500 rounded-full size-1.5 pulse"></div>
                            </div>
                        </div>
                    </a>
                </flux:card>

                <flux:card
                    class="!border-none hover:cursor-pointer !bg-transparent group transition-none hover:transition-colors duration-200 hover:!bg-zinc-100 dark:hover:!bg-zinc-800">
                    <a rel="noreferrer noopener" target="_blank" href="https://github.com/elkiki99/devwebcamp">
                        <div class="flex flex-col h-full space-y-6">
                            <flux:icon.devwebcamp class="size-10" />
                            <div>
                                <flux:heading level="2" size="lg">DevWebCamp</flux:heading>
                                <flux:subheading>
                                    Event management site with PayPal, virtual tickets, and email verification.
                                </flux:subheading>
                            </div>
                            <div class="flex-1">
                                <div class="flex flex-wrap w-full gap-1">
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Side
                                        project
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">CSS
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Javascript
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill" class="dark:!bg-zinc-400/25">Event
                                        website
                                    </flux:badge>
                                </div>
                            </div>

                            <div class="flex items-center gap-2 mt-auto">
                                <flux:icon.link variant="micro" />
                                <p class="inline font-medium underline-offset-[6px] transition-none hover:transition-colors duration-200 group-hover:decoration-current underline text-[var(--color-accent-content)] decoration-[color-mix(in_oklab,var(--color-accent-content),transparent_80%)] !text-sm"
                                    class="!text-sm">
                                    github.com/elkiki99/devwebcamp</p>
                                <div class="bg-green-500 rounded-full size-1.5 pulse"></div>
                            </div>
                        </div>
                    </a>
                </flux:card>
            </div>

            <flux:button as="link" href="https://github.com/elkiki99" rel="noopener noreferrer" target="_blank"
                variant="subtle" class="mr-auto" icon-trailing="arrow-right">All of them</flux:button>
        </div>
    </section>

    <style>
        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
                opacity: 0.7;
            }

            50% {
                transform: scale(1.15);
                opacity: 1;
            }
        }

        .pulse {
            animation: pulse 2s infinite ease-in-out;
        }
    </style>
</x-app-layout>
