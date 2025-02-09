<x-app-layout class="space-y-12">
    <section class="space-y-6 min-h-screen gap-16 mt-12 flex flex-col-reverse md:flex-row">
        <div class="w-full md:w-3/5 space-y-12">
            <div class="space-y-6">
                <div class="space-y-3">
                    <flux:heading level="1" class="!text-4xl font-black">Hi, I'm Bruno Rossani</flux:heading>
                    <flux:subheading size="lg">
                        I live in Montevideo, Uruguay, specifically in the heart of Palermo, located in the southern
                        part of the city, with my wonderful girlfriend, Camila, and our adorable feline companion,
                        Cattana.
                    </flux:subheading>
                    <flux:subheading size="lg">I'm a 25-year-old IT technologist student at UTEC, and I've also
                        studied classical
                        guitar at the Fine Arts Faculty of UdelaR. Additionally, I've completed cooking courses at
                        the
                        prestigious Gato Dumas Institute.
                    </flux:subheading>
                    <flux:subheading size="lg">
                        I'm passionate about programming, playing guitar, biking, and cooking. I see myself as a
                        lifelong learner and genuinely enjoy the process of discovering new things. I'm always on
                        the
                        lookout for fresh opportunities and challenges.
                    </flux:subheading>
                </div>


                <div class="flex gap-6 dark:text-white text-zinc-800">
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
            </div>

            <div class="space-y-3">
                <flux:heading size="xl" level="2">Work</flux:heading>
                <flux:subheading size="lg">I've been working as a solo full-stack developer for over 3 years now. I
                    started creating web pages in WordPress and instantly fell in love with creating websites and web
                    applications. I quickly realized I needed to dig deeper to tweek the details that haunted me.
                    Without realizing I started to learn how to code.</flux:subheading>
                <flux:subheading size="lg">Started as a self-taught journey learning PHP and JavaScript and I had
                    no idea what I was getting myself into. Over the years I've learned a lot about web development and
                    I'm always eager to learn new things. My go-to stack is TALL Stack (TailwindCSS, Alpine.js, Livewire
                    and Laravel) but I'm always open to learning new technologies and frameworks depending on the
                    problem I'm tackling.</flux:subheading>
                <flux:subheading size="lg"> Currently, I work as a freelance web developer while holding a
                    part-time role at a supply company. I'm excited to keep growing as a developer and constantly on the
                    lookout for the next great challenge.
                </flux:subheading>
            </div>

            <div class="space-y-3">
                <flux:heading size="xl" level="2">Side projects</flux:heading>
                <flux:subheading size="lg">A powerful <flux:link target="_blank" href="https://github.com/elkiki99/flux-volt-starter-kit" rel="noopener noreferrer" target="_blank">starter kit</flux:link> for building web applications with Laravel,
                    requires a Flux UI subscription. It includes pre-built user and admin dashboards, seamless
                    integration with Laravel Breeze, and dynamic real-time content powered by Livewire.
                </flux:subheading>
                {{-- <flux:subheading size="lg">Started as a self-taught journey learning PHP and JavaScript and I had
                    no idea what I was getting myself into. Over the years I've learned a lot about web development and
                    I'm always eager to learn new things. My go-to stack is TALL Stack (TailwindCSS, Alpine.js, Livewire
                    and Laravel) but I'm always open to learning new technologies and frameworks depending on the
                    problem I'm tackling.</flux:subheading>
                <flux:subheading size="lg"> Currently, I work as a freelance web developer while holding a
                    part-time role at a supply company. I'm excited to keep growing as a developer and constantly on the
                    lookout for the next great challenge.
                </flux:subheading> --}}
            </div>
        </div>

        <div class="md:w-2/5 ">
            <img class="rotate-3 rounded-xl object-cover mr-6 w-72 md:w-96" src="{{ asset('me.webp') }}"
                alt="Bruno Rossani">
        </div>
    </section>
</x-app-layout>
