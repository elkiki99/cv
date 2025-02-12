<x-app-layout class="space-y-12">
    <!-- About me -->
    <section class="flex flex-col-reverse min-h-screen gap-16 space-y-6 md:mt-6 md:flex-row">
        <div class="w-full space-y-12 md:w-3/5">
            <div class="space-y-6">
                <div class="space-y-2">
                    <flux:heading level="1" class="!text-4xl font-black">Hi, I'm Bruno Rossani</flux:heading>
                    <p class="text-base text-zinc-500 dark:text-white/70">
                        I live in Montevideo, Uruguay, specifically in the heart of Palermo, located in the southern
                        part of the city, with my wonderful girlfriend, Camila, and our adorable feline companion,
                        Cattana.
                    </p>
                    <p class="text-base text-zinc-500 dark:text-white/70">I'm a 25-year-old IT technologist student at
                        UTEC, passionate about
                        software development, web technologies, and problem-solving, always eager to learn and build
                        cool stuff.
                    </p>
                    <p class="text-base text-zinc-500 dark:text-white/70">
                        I also like playing guitar, biking, and cooking. I see myself as a lifelong learner and
                        genuinely enjoy the process of discovering new things. I'm always on the lookout for fresh
                        opportunities and challenges.
                    </p>
                </div>

                @include('components.socials')
            </div>

            <div class="space-y-2">
                <flux:heading size="xl" level="2">Work</flux:heading>
                <p class="text-base text-zinc-500 dark:text-white/70">I've been working as a solo full-stack developer
                    for over 3 years now. I
                    started creating web pages in WordPress and instantly fell in love with creating websites and web
                    applications. I quickly realized I needed to dig deeper to tweek the details that haunted me.
                    Without realizing I started to learn how to code.</p>
                <p class="text-base text-zinc-500 dark:text-white/70">Started as a self-taught journey learning PHP and
                    JavaScript and I had
                    no idea what I was getting myself into. Over the years I've learned a lot about web development and
                    I'm always eager to learn new things. My go-to stack is TALL Stack (TailwindCSS, Alpine.js, Livewire
                    and Laravel) but I'm always open to learning new technologies and frameworks depending on the
                    problem I'm tackling.</p>
                <p class="text-base text-zinc-500 dark:text-white/70"> Currently, I work as a freelance web developer
                    while holding a
                    part-time role at a supply company. I'm excited to keep growing as a developer and constantly on the
                    lookout for the next great challenge.
                </p>
            </div>

            <div class="space-y-2">
                <flux:heading size="xl" level="2">Studies</flux:heading>

                <p
                    class="text-base text-zinc-500 dark:text-white/70 relative pl-5 before:content-['•'] before:absolute before:left-0">
                    <flux:link class="pointer-events-none">
                        UTEC IT Technologist Career</flux:link> - Focused on software development,
                    databases, and emerging technologies to build scalable and efficient applications. Currently
                    studying.
                </p>

                <p
                    class="text-base text-zinc-500 dark:text-white/70 relative pl-5 before:content-['•'] before:absolute before:left-0">
                    <flux:link class="pointer-events-none">Gato Dumas Institute</flux:link> - Completed courses in local gastronomy and pasta making.
                </p>

                <p
                    class="text-base text-zinc-500 dark:text-white/70 relative pl-5 before:content-['•'] before:absolute before:left-0">
                    <flux:link class="pointer-events-none">Fine Arts Faculty of Udelar</flux:link> - Studied musical
                    theory, classical guitar interpretation,
                    and composition, exploring a wide range of repertoires.
                </p>
            </div>

            <div class="space-y-6">
                <div class="space-y-2">
                    <flux:heading size="xl" level="2">Side projects</flux:heading>

                    <p
                        class="text-base text-zinc-500 dark:text-white/70 relative pl-5 before:content-['•'] before:absolute before:left-0">
                        <flux:link target="_blank" href="https://github.com/elkiki99/wevelopers"
                            rel="noopener noreferrer">
                            Wevelopers</flux:link> is a web development learning platform designed
                        for Spanish speakers. It offers a new way to learn interactively through dynamic courses and
                        active
                        community participation.
                    </p>

                    <p
                        class="text-base text-zinc-500 dark:text-white/70 relative pl-5 before:content-['•'] before:absolute before:left-0">
                        A powerful <flux:link target="_blank" href="https://github.com/elkiki99/flux-volt-starter-kit"
                            rel="noopener noreferrer">starter kit</flux:link> for building web applications with
                        Laravel,
                        requires a Flux UI subscription. It includes pre-built user and admin dashboards, seamless
                        integration with Laravel Breeze, and dynamic real-time content powered by Livewire.
                    </p>

                    <p
                        class="text-base text-zinc-500 dark:text-white/70 relative pl-5 before:content-['•'] before:absolute before:left-0">
                        Photography portfolio for <flux:link target="_blank" href="https://github.com/elkiki99/baloloba"
                            rel="noopener noreferrer">Balo Loba</flux:link> - independent photographer brand. It
                        features an
                        intuitive interface and a robust admin panel, making it ideal for managing projects, interacting
                        with users, working with photoshoots and streamlining workflows.
                    </p>
                </div>
                <flux:button as="link" href="/portfolio" wire:navigate variant="subtle" class="mr-auto no-print"
                    icon-trailing="arrow-right">More projects</flux:button>
            </div>

            <div class="space-y-3">
                <flux:heading size="xl" level="2">Youtubers I follow</flux:heading>

                <p
                    class="text-base text-zinc-500 dark:text-white/70 relative pl-5 before:content-['•'] before:absolute before:left-0">
                    <flux:link target="_blank" href="https://www.youtube.com/@veritasium" rel="noopener noreferrer">
                        Veritasium</flux:link>
                </p>

                <p
                    class="text-base text-zinc-500 dark:text-white/70 relative pl-5 before:content-['•'] before:absolute before:left-0">
                    <flux:link target="_blank" href="https://www.youtube.com/@MalewiczHype" rel="noopener noreferrer">
                        Malewicz</flux:link>
                </p>

                <p
                    class="text-base text-zinc-500 dark:text-white/70 relative pl-5 before:content-['•'] before:absolute before:left-0">
                    <flux:link target="_blank" href="https://www.youtube.com/@TeeHarb" rel="noopener noreferrer">Tariq
                        Harb</flux:link>
                </p>

                <p
                    class="text-base text-zinc-500 dark:text-white/70 relative pl-5 before:content-['•'] before:absolute before:left-0">
                    <flux:link target="_blank" href="https://www.youtube.com/@RickBeato" rel="noopener noreferrer">Rick
                        Beato</flux:link>
                </p>

                <p
                    class="text-base text-zinc-500 dark:text-white/70 relative pl-5 before:content-['•'] before:absolute before:left-0">
                    <flux:link target="_blank" href="https://www.youtube.com/@JoshuaWeissman" rel="noopener noreferrer">
                        Joshua Weissman</flux:link>
                </p>

                <p
                    class="text-base text-zinc-500 dark:text-white/70 relative pl-5 before:content-['•'] before:absolute before:left-0">
                    <flux:link target="_blank" href="https://www.youtube.com/@nunomaduro" rel="noopener noreferrer">Nuno
                        Maduro</flux:link>
                </p>
            </div>
        </div>

        <div class="md:w-2/5 ">
            <img class="object-cover mr-6 rotate-3 rounded-xl w-72 md:w-96" src="{{ asset('me.webp') }}"
                alt="Bruno Rossani">
        </div>
    </section>
</x-app-layout>
