<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'Rotadata') }}</title>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-50 text-gray-800 dark:bg-gray-900 dark:text-gray-100">
	<main class="mx-auto flex min-h-screen max-w-5xl items-center px-6 py-14">
		<section class="w-full rounded-2xl border border-gray-200 bg-white p-8 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-10">
			<p class="text-sm font-medium uppercase tracking-widest text-brand-primary dark:text-brand-secondary">Rotadata</p>
			<h1 class="mt-3 text-3xl font-semibold text-brand-accent dark:text-brand-light sm:text-4xl">Costume Inventory, Simplified</h1>
			<p class="mt-4 max-w-2xl text-base text-gray-600 dark:text-gray-300">
				Manage groups, assign costume items, and track inventory with a clean workflow for teachers and students.
			</p>

			<div class="mt-8 flex flex-wrap items-center gap-3">
				@auth
					<a href="{{ route('dashboard') }}" class="inline-flex items-center rounded-lg border border-brand-primary/20 bg-brand-primary px-4 py-2 text-sm font-semibold text-white transition hover:bg-brand-accent">
						Go to Dashboard
					</a>
				@else
					<a href="{{ route('login') }}" class="inline-flex items-center rounded-lg border border-brand-primary/20 bg-brand-primary px-4 py-2 text-sm font-semibold text-white transition hover:bg-brand-accent">
						Log In
					</a>
				@endauth
			</div>
		</section>
	</main>
</body>
</html>