<x-app-layout>{{-- SUCCESS MESSAGE --}}
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-xl mb-6 shadow-lg animate-pulse">
            ✅ {{ session('success') }}
        </div>
    @endif

    <x-slot name="header">
        @php $mainGroup = auth()->user()->adminGroups()->first(); @endphp
        <h2 class="font-semibold text-xl text-grey-800 dark:text-gray-200 leading-tight">{{ $mainGroup->name }}</h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-6">
                <a href="{{ route('admin.members.create') }}" 
                class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-xl hover:bg-blue-700 transition duration-200 shadow-lg">
                    Add New Member
                </a>
            </div>
        </div>
    </div>
</x-app-layout>


