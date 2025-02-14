<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bruno Rossani') }}</title>

    <!-- Fonts -->
    <link rel="icon" href="{{ asset('faviconbr.png') }}" />
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

    <style>
        [x-cloak] {
            display: none;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @fluxStyles
</head>

<body class="font-sans antialiased bg-white dark:bg-zinc-900" x-data>
    <!-- Navigation -->
    <livewire:layout.navigation-header />

    <!-- Dark mode button -->
    <flux:header class="flex md:hidden !px-2 ml-auto mt-6 dark:bg-zinc-800 bg-zinc-100 rounded-full mx-6 no-print">
        <flux:button class="dark:hidden hover:rounded-full" x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon"
            variant="subtle" aria-label="Toggle dark mode" />
        <flux:button class="hidden dark:flex hover:rounded-full" x-data x-on:click="$flux.dark = ! $flux.dark"
            icon="sun" variant="subtle" aria-label="Toggle light mode" />
    </flux:header>

    {{-- <livewire:layout.sidebar />  --}}
    <flux:sidebar stashable sticky
        class="z-30 border-r md:hidden bg-zinc-50 dark:bg-zinc-900 border-zinc-200 dark:border-zinc-700 no-print">
        <flux:sidebar.toggle class="md:hidden" icon="x-mark" />

        <flux:navlist>
            <flux:navlist.item icon="home" wire:navigate href="/">
                <p x-text="$store.language.translations[$store.language.lang].header.home"></p>
            </flux:navlist.item>
            <flux:navlist.item icon="user" wire:navigate href="/about">
                <p x-text="$store.language.translations[$store.language.lang].header.about"></p>
            </flux:navlist.item>
            <flux:navlist.item icon="briefcase" wire:navigate href="/portfolio">
                <p x-text="$store.language.translations[$store.language.lang].header.portfolio"></p>
            </flux:navlist.item>
            <flux:navlist.item icon="book-open" wire:navigate href="/resume">
                <p x-text="$store.language.translations[$store.language.lang].header.resume"></p>
            </flux:navlist.item>
        </flux:navlist>
    </flux:sidebar>

    <!-- Main -->
    <flux:main container class="mt-6 md:mt-0">
        {{ $slot }}
    </flux:main>

    <livewire:layout.footer />

    @fluxScripts

    @persist('toast')
        <flux:toast />
    @endpersist
</body>

{{-- Wire navigate bug fix for dropdown links --}}
<script>
    document.addEventListener("livewire:navigate", () => {
        const htmlElement = document.documentElement;
        if (htmlElement.hasAttribute("style")) {
            htmlElement.removeAttribute("style");
        }
    });
</script>

</html>
