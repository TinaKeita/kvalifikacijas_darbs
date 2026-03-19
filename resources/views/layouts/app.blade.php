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

    <body class="font-sans antialiased text-gray-800 dark:text-gray-100">
        <div class="min-h-screen bg-gray-50 dark:bg-gray-900">
            <div class="grid grid-cols-[13rem_1fr] grid-rows-[auto_1fr] min-h-screen">

                <!-- Logo -->
                <div class="row-start-1 col-start-1
                    bg-brand-primary dark:bg-darkbrand-primary
                    border-b border-black/10 dark:border-white/10
                    flex items-center gap-3 px-5">

                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-7 w-auto text-white" />
                    </a>

                    <h2 class="text-[1.05rem] font-logo italic font-semibold text-white/95 tracking-wide">
                        Rotadata
                    </h2>

                </div>

                <!-- Top Right (HEADER) -->
                <header class="row-start-1 col-start-2
                    bg-white dark:bg-gray-800
                    border-b border-gray-200/80 dark:border-gray-700/80
                    shadow-[0_1px_2px_rgba(0,0,0,0.04)]
                    px-6 py-4 sm:px-8
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
                bg-brand-primary
                dark:bg-darkbrand-primary
                text-white
                border-r border-black/10 dark:border-white/10">
                    @include('layouts.navigation')
                </aside>

                <!-- Page Content (RIGHT) -->
                <main class="row-start-2 col-start-2 p-5 sm:p-6 lg:p-7">
                    <div class="rounded-xl border border-gray-200/70 bg-white shadow-[0_4px_14px_rgba(0,0,0,0.05)] p-5 sm:p-6 dark:border-gray-700/70 dark:bg-gray-800 dark:shadow-none">
                        {{ $slot }}
                    </div>
                </main>

            </div>
        </div>
    </body>


</html>
