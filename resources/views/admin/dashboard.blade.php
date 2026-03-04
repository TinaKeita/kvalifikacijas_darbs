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

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6">
        {{-- Costumes Management --}}
        <a href="{{ route('admin.costumes.index') }}" class="block bg-purple-500 hover:bg-purple-600 text-white font-bold py-6 px-4 rounded-lg text-center shadow">
            Manage Costumes
        </a>

        <a href="{{ route('admin.costumes.create') }}" class="block bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-6 px-4 rounded-lg text-center shadow">
            Add New Costume
        </a>
    </div>
</x-app-layout>
