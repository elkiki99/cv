<x-app-layout class="space-y-12">
    <section class="space-y-6 min-h-screen flex flex-col">
        <img class="rounded-full size-24" src="{{ asset('me.webp') }}" alt="Bruno Rossani">
        
        <div>
            <flux:heading level="1" class="!text-4xl font-black">Bruno Rossani</flux:heading>
            <flux:subheading size="lg">
                I just love creating stuff! I'm a classical guitarist, cooking
                enthusiast & devoted full-stack coder.<br class="hidden md:flex">
                You'll find me somewhere in between those lines. If you'd like, you can 
                <flux:link rel="noopener noreferrer" target="_blank" href="mailto:brossani23@gmail.com">
                    send me an email.
                </flux:link>
            </flux:subheading>
        </div>

        <div class="flex gap-6 dark:text-white text-zinc-800">
            <a href="#"><flux:icon.twitter variant="mini" /></a>
            <a href="#"><flux:icon.instagram variant="mini" /></a>
            <a href="#"><flux:icon.github variant="mini" /></a>
            <a href="#"><flux:icon.linkedin variant="mini" /></a>
        </div>

        <div class="flex-grow"></div>

        @include('components.marquee')

        <div class="flex-grow"></div>
    </section>

    <section>

    </section>
</x-app-layout>