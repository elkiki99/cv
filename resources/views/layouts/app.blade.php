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
    <flux:header
        class="flex flex-row items-center justify-center !px-2 md:!px-6 mx-6 mt-6 mb-0 md:mb-6 mr-auto bg-zinc-100 rounded-full md:mx-auto dark:bg-zinc-800 no-print">
        <flux:sidebar.toggle class="md:hidden hover:rounded-full no-print" icon="bars-2" />

        <div>
            <flux:button icon="language" variant="subtle" @click="$store.language.toggle()">
            </flux:button>
        </div>

        <flux:navbar class="max-md:hidden no-print">
            <flux:navbar.item wire:navigate href="/">Home</flux:navbar.item>
            <flux:navbar.item wire:navigate href="/about">About</flux:navbar.item>
            <flux:navbar.item wire:navigate href="/portfolio">Portfolio</flux:navbar.item>
            <flux:navbar.item wire:navigate href="/resume">Resume</flux:navbar.item>
        </flux:navbar>

        <!-- Dark mode button -->
        <div class="hidden md:flex no-print">
            <flux:button class="dark:hidden" x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon"
                variant="subtle" aria-label="Toggle dark mode" />
            <flux:button class="hidden dark:flex" x-data x-on:click="$flux.dark = ! $flux.dark" icon="sun"
                variant="subtle" aria-label="Toggle light mode" />
        </div>
    </flux:header>

    <!-- Dark mode button -->
    <flux:header class="flex md:hidden !px-2 ml-auto mt-6 dark:bg-zinc-800 bg-zinc-100 rounded-full mx-6 no-print">
        <flux:button class="dark:hidden hover:rounded-full" x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon"
            variant="subtle" aria-label="Toggle dark mode" />
        <flux:button class="hidden dark:flex hover:rounded-full" x-data x-on:click="$flux.dark = ! $flux.dark"
            icon="sun" variant="subtle" aria-label="Toggle light mode" />
    </flux:header>

    <flux:sidebar stashable sticky
        class="border-r md:hidden bg-zinc-50 dark:bg-zinc-900 border-zinc-200 dark:border-zinc-700 no-print">
        <flux:sidebar.toggle class="md:hidden" icon="x-mark" />

        <flux:navlist>
            <flux:navlist.item icon="home" wire:navigate href="/">Home</flux:navlist.item>
            <flux:navlist.item icon="user" wire:navigate href="/about">About</flux:navlist.item>
            <flux:navlist.item icon="briefcase" wire:navigate href="/portfolio">Portfolio</flux:navlist.item>
            <flux:navlist.item icon="book-open" wire:navigate href="/resume">Resume</flux:navlist.item>
        </flux:navlist>
    </flux:sidebar>

    <!-- Main -->
    <flux:main container class="mt-6 md:mt-0">
        {{ $slot }}
    </flux:main>

    <flux:footer x-cloak class="mt-6 no-print" container>
        <div class="flex justify-between">
            <flux:link wire:navigate href="/">Home</flux:link>
            <flux:link wire:navigate href="/about">About</flux:link>
            <flux:link wire:navigate href="/portfolio">Portfolio</flux:link>
            <flux:link wire:navigate href="/resume">Resume</flux:link>
        </div>
    </flux:footer>

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
