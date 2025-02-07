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
        <flux:modal.trigger name="open-sidebar">
            <flux:sidebar.toggle class="md:hidden" icon="bars-2" />
            {{-- <flux:button class="md:hidden" icon="bars-2"></flux:button> --}}
        </flux:modal.trigger>

        <flux:navbar class="max-md:hidden">
            <flux:navbar.item icon="home" href="/">Home</flux:navbar.item>
            <flux:navbar.item icon="inbox" badge="12" href="#">Inbox</flux:navbar.item>
            <flux:navbar.item icon="document-text" href="#">Documents</flux:navbar.item>
            <flux:navbar.item icon="calendar" href="#">Calendar</flux:navbar.item>
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
        <flux:button class="dark:hidden" x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon" variant="subtle"
            aria-label="Toggle dark mode" />
        <flux:button class="hidden dark:flex" x-data x-on:click="$flux.dark = ! $flux.dark" icon="sun"
            variant="subtle" aria-label="Toggle light mode" />
    </flux:header>

    <flux:modal name="open-sidebar" class="space-y-6 md:hidden">
        <div>
            <flux:heading size="lg">Update profile</flux:heading>
            <flux:subheading>Make changes to your personal details.</flux:subheading>
        </div>

        <flux:input label="Name" placeholder="Your name" />

        <flux:input label="Date of birth" type="date" />

        <div class="flex">
            <flux:spacer />

            <flux:button type="submit" variant="primary">Save changes</flux:button>
        </div>
    </flux:modal>

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
