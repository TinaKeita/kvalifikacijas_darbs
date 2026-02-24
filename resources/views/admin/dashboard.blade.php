<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Admin Dashboard</h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    
            @php $mainGroup = auth()->user()->adminGroups()->first(); @endphp
            @if($mainGroup)
                <div class="bg-blue-50 border-l-4 border-blue-500 p-6 mb-6">
                    <h3 class="text-xl font-bold text-blue-900">Your Main Group: <span class="text-2xl">{{ $mainGroup->name }}</span></h3>
                    <p class="text-blue-800 mt-1">0 members (add your first member!)</p>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3>All Your Groups ({{ auth()->user()->adminGroups->count() }})</h3>
                    @foreach(auth()->user()->adminGroups as $group)
                        <div class="border-b py-2">
                            Group: {{ $group->name }} (0 members)
                        </div>
                    @endforeach
                    
                    <button class="bg-gray-500 text-white px-4 py-2 mt-4 rounded disabled cursor-not-allowed">Create New Group (Coming Soon)</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
