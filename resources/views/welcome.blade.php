<x-app-layout>
    <section class="space-y-6">
        <img class="rounded-full size-24" src="{{ asset('me.webp') }}" alt="Bruno Rossani">
        <div class="">
            <flux:heading level="1" class="!text-4xl font-bold">Bruno Rossani</flux:heading>
            <flux:subheading level="2" size="lg">I just love creating stuff! I'm a classical guitarist, cooking
                enthusiast & devoted full-stack coder.<br class="hidden md:flex"> You'll find me somewhere in between those lines. If you'd
                like, you can <flux:link rel="noopener noreferrer" target="_blank" href="mailto:brossani23@gmail.com">
                    send me an email.</flux:link>
            </flux:subheading>
        </div>

        <div class="flex gap-6">
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
    </section>
</x-app-layout>
