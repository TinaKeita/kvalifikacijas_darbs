<!DOCTYPE html>
<html   lang="{{ str_replace('_', '-', app()->getLocale()) }}"
        x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }"
        x-init="$watch('darkMode', val => {
            localStorage.setItem('darkMode', val);
            document.documentElement.classList.toggle('dark', val);
             })"
        :class="{ 'dark': darkMode }"
>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.bunny.net/css?family=playfair-display:400,600,700&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-sans antialiased">
        <div class="min-h-screen bg-brand-light/40 dark:bg-gray-900">
            <div class="grid grid-cols-[16rem_1fr] grid-rows-[auto_1fr] min-h-screen">

                <!-- Logo -->
                <div class="row-start-1 col-start-1 
                    bg-lightbrand-accent 
                    dark:bg-darkbrand-accent
                    border-b border-white/10
                    flex items-center gap-3 px-6">

                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-8 w-auto text-white" />
                    </a>

                    <h2 class="text-2xl font-logo italic font-semibold text-black tracking-wide">
                        Rotadata
                    </h2>

                </div>

                <!-- Top Right (HEADER) -->
                <header class="row-start-1 col-start-2
                    bg-white dark:bg-gray-800
                    border-b border-gray-200 dark:border-gray-700
                    shadow-sm
                    px-8 py-5
                    flex justify-between items-center">

                    <div>
                        @isset($header)
                            {{ $header }}
                        @endisset
                    </div>

                    <!-- Dark Mode Toggle -->
                    <div class="toggle-switch">
                        <label class="switch-label">
                            <input 
                                type="checkbox" 
                                class="checkbox"
                                x-model="darkMode"
                            >
                            <span class="slider"></span>
                        </label>
                    </div>

                </header>

                <!-- Sidebar (LEFT) -->
                <aside class="row-start-2 col-start-1 
                bg-brand-secondary 
                dark:bg-darkbrand-secondary
                text-white
                border-r border-white/10
                rounded-r-xl">
                    @include('layouts.navigation')
                </aside>

                <!-- Page Content (RIGHT) -->
                <main class="row-start-2 col-start-2 p-8">
                    <div class="rounded-xl bg-white dark:bg-gray-800 shadow-sm p-6">
                        {{ $slot }}
                    </div>
                </main>

            </div>
        </div>
    </body>


</html>
