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

    @fluxAppearance
</head>

<body class="font-sans antialiased bg-white dark:bg-zinc-900">
    <!-- Navigation -->
    <livewire:layout.navigation-header />

    <!-- Dark mode button -->
    <flux:header class="flex md:hidden !px-2 ml-auto mt-6 dark:bg-zinc-800 bg-zinc-100 rounded-full mx-6 no-print">
        <flux:button class="hidden dark:flex hover:rounded-full" x-data x-on:click="$flux.dark = ! $flux.dark"
            icon="moon" variant="subtle" aria-label="Toggle light mode" />
    </flux:header>

    <livewire:layout.sidebar />

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

</html>
