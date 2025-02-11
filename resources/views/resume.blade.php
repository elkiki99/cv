<x-app-layout class="space-y-12">
    <section class="flex flex-col max-w-3xl min-h-screen mx-auto mt-0 space-y-6 md:mt-12">
        <div class="flex gap-4">
            <div class="space-y-3">
                <flux:heading class="!text-2xl">Bruno Rossani</flux:heading>
                <flux:subheading>Full Stack developer with +2 years of experience, specializing in Laravel and Back End
                    solutions. I am driven by building robust web applications and solutions that provide great user
                    experiences.</flux:subheading>
                <div class="flex items-center gap-2 ">
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
            <img src="{{ asset('me.webp') }}" class="rounded-lg size-32">
        </div>
    </section>
</x-app-layout>
