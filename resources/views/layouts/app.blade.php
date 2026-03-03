<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <div class="grid grid-cols-[16rem_1fr] grid-rows-[auto_1fr] min-h-screen">

                <!-- Top Left (LOGO AREA) -->
                <div class="row-start-1 col-start-1 bg-white dark:bg-gray-800 border-b border-r border-gray-100 dark:border-gray-700 flex items-center px-6">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Top Right (HEADER) -->
               <header class="row-start-1 col-start-2 dark:bg-gray-800 bg-white shadow rounded-bl-xl px-8 py-6">
                    @isset($header)
                        {{ $header }}
                    @endisset
                </header>

                <!-- Sidebar (LEFT) -->
                <aside class="row-start-2 col-start-1 dark:bg-gray-800 bg-white border-r rounded-r-xl">
                    @include('layouts.navigation')
                </aside>

                <!-- Page Content (RIGHT) -->
                <main class="row-start-2 col-start-2 p-6">
                    <div class="rounded-xl shadow p-6">
                        {{ $slot }}
                    </div>
                </main>

            </div>
        </div>
    </body>


</html>
