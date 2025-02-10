<x-app-layout class="space-y-12">
    <section class="flex flex-col min-h-screen mt-12">
        <div class="space-y-6">
            <div class="space-y-3">
                <flux:heading level="1" class="!text-4xl font-black">Things I've made trying to leave<br
                        class="hidden md:flex"> a mark in the digital world</flux:heading>
                <flux:subheading size="lg">
                    A list of projects I've worked on, I'm working on and I will work on.
                </flux:subheading>
            </div>

            <div class="grid max-w-xl grid-cols-1 gap-8 pt-6 lg:max-w-full lg:grid-cols-3">
                <flux:card
                    class="!border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800">
                    <div class="flex flex-col space-y-6">
                        {{-- <flux:icon.tailwind /> --}}
                        <div class="space-y-3">
                            <div class="flex items-center gap-2">
                                <flux:heading level="2" size="lg">Wevelopers</flux:heading>
                                <flux:badge size="sm" icon="wrench" color="green">In progress</flux:badge>
                            </div>
                            <flux:subheading>
                                Interactive web development learning platform for Spanish speakers.
                            </flux:subheading>
                        </div>
                        <div class="flex flex-wrap w-full gap-2">
                            <flux:badge size="sm" variant="pill">Side project</flux:badge>
                            <flux:badge size="sm" variant="pill">PHP</flux:badge>
                            <flux:badge size="sm" variant="pill">Javascript</flux:badge>
                            <flux:badge size="sm" variant="pill">Learning platform</flux:badge>
                        </div>

                        <div class="flex items-center gap-2">
                            <flux:icon.link variant="micro" />
                            <flux:link class="!text-sm">Link</flux:link>
                            <div class="bg-green-500 rounded-full size-1.5 pulse"></div>
                        </div>
                    </div>
                </flux:card>

                <flux:card
                    class="!border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800">
                    <div class="flex flex-col space-y-6">
                        {{-- <flux:icon.tailwind /> --}}
                        <div class="space-y-3">
                            <flux:heading level="2" size="lg">Digizen</flux:heading>
                            <flux:subheading>
                                Digital agency template using FluxUI Livewire Components.
                            </flux:subheading>
                        </div>
                        <div class="flex flex-wrap w-full gap-2">
                            <flux:badge size="sm" variant="pill">Side project</flux:badge>
                            <flux:badge size="sm" variant="pill">PHP</flux:badge>
                            <flux:badge size="sm" variant="pill">Javascript</flux:badge>
                            <flux:badge size="sm" variant="pill">Learning platform</flux:badge>
                        </div>
                        <div class="flex items-center gap-2">
                            <flux:icon.link variant="micro" />
                            <flux:link class="!text-sm">Link</flux:link>
                            <div class="bg-green-500 rounded-full size-1.5 pulse"></div>
                        </div>
                    </div>
                </flux:card>

                <flux:card
                    class="!border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800">
                    <div class="flex flex-col space-y-6">
                        {{-- <flux:icon.tailwind /> --}}
                        <div>
                            <flux:heading level="2" size="lg">Flux UI Starter Kit</flux:heading>
                            <flux:subheading>
                                Laravel starter kit with admin/user dashboards and Livewire.
                            </flux:subheading>
                        </div>
                        <div class="flex flex-wrap w-full gap-2">
                            <flux:badge size="sm" variant="pill">Side project</flux:badge>
                            <flux:badge size="sm" variant="pill">PHP</flux:badge>
                            <flux:badge size="sm" variant="pill">Javascript</flux:badge>
                            <flux:badge size="sm" variant="pill">Learning platform</flux:badge>
                        </div>
                        <div class="flex items-center gap-2">
                            <flux:icon.link variant="micro" />
                            <flux:link class="!text-sm">Link</flux:link>
                            <div class="bg-green-500 rounded-full size-1.5 pulse"></div>
                        </div>
                    </div>
                </flux:card>

                <flux:card
                    class="!border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800">
                    <div class="flex flex-col space-y-6">
                        {{-- <flux:icon.tailwind /> --}}
                        <div>
                            <flux:heading level="2" size="lg">Laraflix</flux:heading>
                            <flux:subheading>
                                Netflix-inspired movie portal using TALL Stack and TMDb API.
                            </flux:subheading>
                        </div>
                        <div class="flex flex-wrap w-full gap-2">
                            <flux:badge size="sm" variant="pill">Side project</flux:badge>
                            <flux:badge size="sm" variant="pill">PHP</flux:badge>
                            <flux:badge size="sm" variant="pill">Javascript</flux:badge>
                            <flux:badge size="sm" variant="pill">Learning platform</flux:badge>
                        </div>
                        <div class="flex items-center gap-2">
                            <flux:icon.link variant="micro" />
                            <flux:link class="!text-sm">Link</flux:link>
                            <div class="bg-green-500 rounded-full size-1.5 pulse"></div>
                        </div>
                    </div>
                </flux:card>

                <flux:card
                    class="!border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800">
                    <div class="flex flex-col space-y-6">
                        {{-- <flux:icon.tailwind /> --}}
                        <div>
                            <flux:heading level="2" size="lg">Chat App</flux:heading>
                            <flux:subheading>
                                Web-inspired chat app built with Laravel and Reverb
                            </flux:subheading>
                        </div>
                        <div class="flex flex-wrap w-full gap-2">
                            <flux:badge size="sm" variant="pill">Side project</flux:badge>
                            <flux:badge size="sm" variant="pill">PHP</flux:badge>
                            <flux:badge size="sm" variant="pill">Javascript</flux:badge>
                            <flux:badge size="sm" variant="pill">Learning platform</flux:badge>
                        </div>                        <div class="flex items-center gap-2">
                            <flux:icon.link variant="micro" />
                            <flux:link class="!text-sm">Link</flux:link>
                            <div class="bg-green-500 rounded-full size-1.5 pulse"></div>
                        </div>
                    </div>
                </flux:card>

                <flux:card
                    class="!border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800">
                    <div class="flex flex-col space-y-6">
                        {{-- <flux:icon.tailwind /> --}}
                        <div>
                            <flux:heading level="2" size="lg">Jobs</flux:heading>
                            <flux:subheading>
                                Job portal with CV management, job posts, and company profiles.
                            </flux:subheading>
                        </div>
                        <div class="flex flex-wrap w-full gap-2">
                            <flux:badge size="sm" variant="pill">Side project</flux:badge>
                            <flux:badge size="sm" variant="pill">PHP</flux:badge>
                            <flux:badge size="sm" variant="pill">Javascript</flux:badge>
                            <flux:badge size="sm" variant="pill">Learning platform</flux:badge>
                        </div>
                        <div class="flex items-center gap-2">
                            <flux:icon.link variant="micro" />
                            <flux:link class="!text-sm">Link</flux:link>
                            <div class="bg-green-500 rounded-full size-1.5 pulse"></div>
                        </div>
                    </div>
                </flux:card>

                <flux:card
                    class="!border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800">
                    <div class="flex flex-col space-y-6">
                        {{-- <flux:icon.tailwind /> --}}
                        <div>
                            <flux:heading level="2" size="lg">The Edifice Gazette</flux:heading>
                            <flux:subheading>
                                Laravel blog template with content management and user roles.
                            </flux:subheading>
                        </div>
                        <div class="flex flex-wrap w-full gap-2">
                            <flux:badge size="sm" variant="pill">Side project</flux:badge>
                            <flux:badge size="sm" variant="pill">PHP</flux:badge>
                            <flux:badge size="sm" variant="pill">Javascript</flux:badge>
                            <flux:badge size="sm" variant="pill">Learning platform</flux:badge>
                        </div>
                        <div class="flex items-center gap-2">
                            <flux:icon.link variant="micro" />
                            <flux:link class="!text-sm">Link</flux:link>
                            <div class="bg-green-500 rounded-full size-1.5 pulse"></div>
                        </div>
                    </div>
                </flux:card>

                <flux:card
                    class="!border-none hover:cursor-pointer !bg-transparent hover:!bg-zinc-100 dark:hover:!bg-zinc-800">
                    <div class="flex flex-col space-y-6">
                        {{-- <flux:icon.tailwind /> --}}
                        <div>
                            <flux:heading level="2" size="lg">DevWebCamp</flux:heading>
                            <flux:subheading>
                                Event management site with PayPal, virtual tickets, and email verification.
                            </flux:subheading>
                        </div>
                        <div class="flex flex-wrap w-full gap-2">
                            <flux:badge size="sm" variant="pill">Side project</flux:badge>
                            <flux:badge size="sm" variant="pill">PHP</flux:badge>
                            <flux:badge size="sm" variant="pill">Javascript</flux:badge>
                            <flux:badge size="sm" variant="pill">Learning platform</flux:badge>
                        </div>
                        <div class="flex items-center gap-2">
                            <flux:icon.link variant="micro" />
                            <flux:link class="!text-sm">Link</flux:link>
                            <div class="bg-green-500 rounded-full size-1.5 pulse"></div>
                        </div>
                    </div>
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
