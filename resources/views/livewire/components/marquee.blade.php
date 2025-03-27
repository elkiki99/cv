<div x-data x-init="$nextTick(() => {
    const content = $refs.content;
    const item = $refs.item;
    const clone = item.cloneNode(true);
    content.appendChild(clone);
});" class="relative z-10 w-full py-6 bg-transparent">
    <div
        class="relative w-full py-3 mx-auto overflow-hidden text-lg italic tracking-wide text-black uppercase bg-transparent dark:text-white max-w-7xl sm:text-xs md:text-sm lg:text-base xl:text-xl 2xl:text-2xl">
        <div class="absolute left-0 z-20 w-40 h-full bg-linear-to-r dark:from-zinc-900 from-white to-transparent">
        </div>
        <div class="absolute right-0 z-20 w-40 h-full bg-linear-to-l dark:from-zinc-900 from-white to-transparent">
        </div>
        <div x-ref="content" class="flex animate-marquee">
            <div x-ref="item"
                class="flex items-center justify-around shrink-0 w-full py-2 space-x-6 md:space-x-4 text-zinc-700 dark:text-white/80">
                <flux:icon.laravel class="size-8" />

                <flux:icon.tailwind class="size-8" />

                <flux:icon.livewire class="hidden size-8 sm:block" />

                <flux:icon.alpine class="hidden size-8 sm:block" />

                <flux:icon.php class="size-8" />
                
                <flux:icon.javascript class="size-8" />
                
                <flux:icon.react class="hidden size-8 md:block" />

                <flux:icon.sqlite class="hidden size-8 md:block" />
                
                <flux:icon.fly class="hidden size-8 md:block transition-none!" />
                
                <flux:icon.framer class="hidden size-8 md:block" />

                <flux:icon.stripe class="hidden size-8 md:block" />

                <flux:icon.docker class="hidden size-8 md:block" />

                <div class="pr-6 md:pr-4">
                    <flux:icon.git class="size-8" />
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .animate-marquee {
            animation: marquee 20s linear infinite;
        }
    </style>
</div>

