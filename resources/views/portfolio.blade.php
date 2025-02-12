<x-app-layout>
    <!-- Portfolio -->
    <section class="flex flex-col min-h-screen space-y-6 print-adjust-h md:mt-6">
        <div>
            <flux:heading level="1" class="!text-4xl font-black">Things I've made trying to leave<br
                    class="hidden md:flex"> a mark in the digital world</flux:heading>
            <flux:subheading size="lg">
                A list of projects I've worked on, I'm working on and I will work on.
            </flux:subheading>
        </div>

        <div class="space-y-6 print-adjust-spacing">
            <div class="grid max-w-xl grid-cols-1 gap-4 print-adjust-width md:max-w-full md:grid-cols-2 lg:max-w-full lg:grid-cols-3">
                <flux:card
                    class="!border-none hover:cursor-pointer !bg-transparent group transition-none hover:transition-colors duration-200 hover:!bg-zinc-100 dark:hover:!bg-zinc-800 print-adjust-p">
                    <a rel="noreferrer noopener" target="_blank" href="https://github.com/elkiki99/wevelopers">
                        <div class="flex flex-col h-full space-y-6 print-adjust-spacing">
                            <flux:icon.wevelopers class="size-10 no-print" />
                            <div class="space-y-2">
                                <div class="flex items-center gap-2">
                                    <flux:heading level="2" size="lg">Wevelopers</flux:heading>
                                    <flux:badge size="sm" icon="wrench" color="green" class="no-print">In progress
                                    </flux:badge>
                                </div>
                                <p class="text-sm text-zinc-500 dark:text-white/70">
                                    Interactive web development learning platform for Spanish speakers.
                                </p>
                            </div>
                            <div class="flex-1">
                                <div class="flex flex-wrap w-full gap-1">
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Side project
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">PHP
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Javascript
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Learning
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
                    class="!border-none hover:cursor-pointer !bg-transparent group transition-none hover:transition-colors duration-200 hover:!bg-zinc-100 dark:hover:!bg-zinc-800 print-adjust-p">
                    <a rel="noreferrer noopener" target="_blank" href="https://github.com/elkiki99/digizen">
                        <div class="flex flex-col h-full space-y-6 print-adjust-spacing">
                            <flux:icon.digizen class="size-10 no-print" />
                            <div class="space-y-2">
                                <flux:heading level="2" size="lg">Digizen</flux:heading>
                                <p class="text-sm text-zinc-500 dark:text-white/70">
                                    Digital agency template using FluxUI Livewire Components.
                                </p>
                            </div>
                            <div class="flex-1">
                                <div class="flex flex-wrap w-full gap-1">
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Side project
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Blade
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">PHP
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Digital
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
                    class="!border-none hover:cursor-pointer !bg-transparent group transition-none hover:transition-colors duration-200 hover:!bg-zinc-100 dark:hover:!bg-zinc-800 print-adjust-p">
                    <a rel="noreferrer noopener" target="_blank"
                        href="https://github.com/elkiki99/flux-volt-starter-kit">
                        <div class="flex flex-col h-full space-y-6 print-adjust-spacing">
                            <flux:icon.flux class="size-10 no-print" />
                            <div class="space-y-2">
                                <flux:heading level="2" size="lg">Flux UI Starter Kit</flux:heading>
                                <p class="text-sm text-zinc-500 dark:text-white/70">
                                    Laravel starter kit with admin/user dashboards and Livewire.
                                </p>
                            </div>
                            <div class="flex-1">

                                <div class="flex flex-wrap w-full gap-1">
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Side project
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Flux UI
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Livewire
                                        components
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Starter kit
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
                    class="!border-none hover:cursor-pointer !bg-transparent group transition-none hover:transition-colors duration-200 hover:!bg-zinc-100 dark:hover:!bg-zinc-800 print-adjust-p">
                    <a rel="noreferrer noopener" target="_blank" href="https://github.com/elkiki99/baloloba">
                        <div class="flex flex-col h-full space-y-6 print-adjust-spacing">
                            <flux:icon.baloloba class="size-10 no-print" />
                            <div class="space-y-2">
                                <flux:heading level="2" size="lg">Balo Loba</flux:heading>
                                <p class="text-sm text-zinc-500 dark:text-white/70">
                                    Photography portfolio for an independent photographer brand.
                                </p>
                            </div>
                            <div class="flex-1">

                                <div class="flex flex-wrap w-full gap-1">
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Freelance
                                        job
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Laravel
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Admin
                                        panel
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">
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
                    class="!border-none hover:cursor-pointer !bg-transparent group transition-none hover:transition-colors duration-200 hover:!bg-zinc-100 dark:hover:!bg-zinc-800 print-adjust-p">
                    <a rel="noreferrer noopener" target="_blank" href="https://github.com/elkiki99/laraflix">
                        <div class="flex flex-col h-full space-y-6 print-adjust-spacing">
                            <flux:icon.laraflix class="size-10 no-print" />
                            <div class="space-y-2">
                                <flux:heading level="2" size="lg">Laraflix</flux:heading>
                                <p class="text-sm text-zinc-500 dark:text-white/70">
                                    Netflix-inspired movie portal using TALL Stack and TMDB API.
                                </p>
                            </div>
                            <div class="flex-1">

                                <div class="flex flex-wrap w-full gap-1">
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Side
                                        project
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Laravel
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">APIs
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Movie
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
                    class="!border-none hover:cursor-pointer !bg-transparent group transition-none hover:transition-colors duration-200 hover:!bg-zinc-100 dark:hover:!bg-zinc-800 print-adjust-p">
                    <a rel="noreferrer noopener" target="_blank" href="https://github.com/elkiki99/Chat">
                        <div class="flex flex-col h-full space-y-6 print-adjust-spacing">
                            <flux:icon.chat-app class="size-10 no-print" />
                            <div class="space-y-2">
                                <flux:heading level="2" size="lg">Chat App</flux:heading>
                                <p class="text-sm text-zinc-500 dark:text-white/70">
                                    Web-inspired chat app built with Laravel and Reverb
                                </p>
                            </div>
                            <div class="flex-1">

                                <div class="flex flex-wrap w-full gap-1">
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Side
                                        project
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Alpine.js
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Websockets
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Chat
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
                    class="!border-none hover:cursor-pointer !bg-transparent group transition-none hover:transition-colors duration-200 hover:!bg-zinc-100 dark:hover:!bg-zinc-800 print-adjust-p">
                    <a rel="noreferrer noopener" target="_blank" href="https://github.com/elkiki99/jobs">
                        <div class="flex flex-col h-full space-y-6 print-adjust-spacing">
                            <flux:icon.jobs class="size-10 no-print" />
                            <div class="space-y-2">
                                <flux:heading level="2" size="lg">Jobs</flux:heading>
                                <p class="text-sm text-zinc-500 dark:text-white/70">
                                    Job portal with CV management, job posts, and company profiles.
                                </p>
                            </div>
                            <div class="flex-1">

                                <div class="flex flex-wrap w-full gap-1">
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Side
                                        project
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Laravel
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Livewire
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Job board
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
                    class="!border-none hover:cursor-pointer !bg-transparent group transition-none hover:transition-colors duration-200 hover:!bg-zinc-100 dark:hover:!bg-zinc-800 print-adjust-p">
                    <a rel="noreferrer noopener" target="_blank"
                        href="https://github.com/elkiki99/The-Edifice-Gazette">
                        <div class="flex flex-col h-full space-y-6 print-adjust-spacing">
                            <flux:icon.the-edifice-gazette class="size-10 no-print" />
                            <div class="space-y-2">
                                <flux:heading level="2" size="lg">The Edifice Gazette</flux:heading>
                                <p class="text-sm text-zinc-500 dark:text-white/70">
                                    Laravel blog template with content management and user roles.
                                </p>
                            </div>
                            <div class="flex-1">

                                <div class="flex flex-wrap w-full gap-1">
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Side
                                        project
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">
                                        TailwindCSS
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Stripe
                                        intgegration
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">CMS
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
                    class="!border-none hover:cursor-pointer !bg-transparent group transition-none hover:transition-colors duration-200 hover:!bg-zinc-100 dark:hover:!bg-zinc-800 print-adjust-p">
                    <a rel="noreferrer noopener" target="_blank" href="https://github.com/elkiki99/devwebcamp">
                        <div class="flex flex-col h-full space-y-6 print-adjust-spacing">
                            <flux:icon.devwebcamp class="size-10 no-print" />
                            <div class="space-y-2">
                                <flux:heading level="2" size="lg">DevWebCamp</flux:heading>
                                <p class="text-sm text-zinc-500 dark:text-white/70">
                                    Event management site with PayPal, virtual tickets, and email verification.
                                </p>
                            </div>
                            <div class="flex-1">
                                <div class="flex flex-wrap w-full gap-1">
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Side
                                        project
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">CSS
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Javascript
                                    </flux:badge>
                                    <flux:badge size="sm" variant="pill"
                                        class="print-adjust-bg">Event
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
                variant="subtle" class="mr-auto no-print" icon-trailing="arrow-right">All of
                them</flux:button>
        </div>
    </section>
</x-app-layout>
