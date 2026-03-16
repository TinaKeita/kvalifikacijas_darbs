<x-app-layout>
    {{-- Success message --}}
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-xl mb-6 shadow-lg animate-pulse">
            ✅ {{ session('success') }}
        </div>
    @endif

    <x-slot name="header">
        @php $mainGroup = auth()->user()->adminGroups()->first(); @endphp
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $mainGroup->name }} Dashboard
        </h2>
    </x-slot>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-6">

        {{-- LEFT SIDE --}}
        <div class="flex flex-col gap-6">
            <a href="{{ route('admin.costumes.index') }}"
               class="block bg-brand-secondary hover:bg-brand-primary text-white font-bold py-6 px-4 rounded-lg text-center shadow">
                Manage Costumes
            </a>

            <a href="{{ route('admin.costumes.create') }}"
               class="block bg-brand-secondary hover:bg-brand-primary text-white font-bold py-6 px-4 rounded-lg text-center shadow">
                Add New Costume
            </a>
        </div>

        {{-- RIGHT SIDE --}}
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow min-h-[200px]">
            <h3 class="text-lg font-semibold mb-4 text-gray-800 dark:text-gray-200">
                Statistics
            </h3>

            <div class="text-gray-500 dark:text-gray-400 text-center py-10">
                To be continued...
            </div>
        </div>

    </div>
</x-app-layout>
