<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bruno Rossani') }}</title>

    <!-- Fonts -->
    <link rel="icon" href="{{ asset('favicon.png') }}" />
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

<body class="min-h-screen font-sans antialiased bg-white dark:bg-zinc-900">
    <!-- Navigation -->
    <flux:header
        class="flex flex-row items-center justify-center !px-2 md:!px-6 max-w-xl mx-6 mt-6 mr-auto bg-zinc-100 rounded-full md:mx-auto dark:bg-zinc-800">
        <flux:sidebar.toggle class="md:hidden hover:rounded-full" icon="bars-2" />

        <flux:navbar class="max-md:hidden">
            <flux:navbar.item href="/">Home</flux:navbar.item>
            <flux:navbar.item href="#">About</flux:navbar.item>
            <flux:navbar.item href="#">Portfolio</flux:navbar.item>
            <flux:navbar.item href="#">Resume</flux:navbar.item>
        </flux:navbar>

        <!-- Dark mode button -->
        <div class="hidden md:flex">
            <flux:button class="dark:hidden" x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon"
                variant="subtle" aria-label="Toggle dark mode" />
            <flux:button class="hidden dark:flex" x-data x-on:click="$flux.dark = ! $flux.dark" icon="sun"
                variant="subtle" aria-label="Toggle light mode" />
        </div>
    </flux:header>

    <!-- Dark mode button -->
    <flux:header class="flex md:hidden !px-2 ml-auto mt-6 dark:bg-zinc-800 bg-zinc-100 rounded-full mx-6">
        <flux:button class="dark:hidden hover:rounded-full" x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon"
            variant="subtle" aria-label="Toggle dark mode" />
        <flux:button class="hidden dark:flex hover:rounded-full" x-data x-on:click="$flux.dark = ! $flux.dark"
            icon="sun" variant="subtle" aria-label="Toggle light mode" />
    </flux:header>

    <flux:sidebar stashable sticky
        class="border-r md:hidden bg-zinc-50 dark:bg-zinc-900 border-zinc-200 dark:border-zinc-700">
        <flux:sidebar.toggle class="md:hidden" icon="x-mark" />

        <flux:navlist>
            <flux:navlist.item icon="home" href="/">Home</flux:navlist.item>
            <flux:navlist.item icon="user" href="#">About</flux:navlist.item>
            <flux:navlist.item icon="briefcase" href="#">Portfolio</flux:navlist.item>
            <flux:navlist.item icon="book-open" href="#">Resume</flux:navlist.item>
        </flux:navlist>
    </flux:sidebar>

    <!-- Main -->
    <flux:main container class="mx-auto max-w-7xl">
        {{ $slot }}
    </flux:main>

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
