<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Member Dashboard</h2>
    </x-slot>

    @foreach(auth()->user()->memberGroups as $group)
        <div class="bg-white p-6 mt-6 shadow rounded-lg">
            <h3 class="font-bold text-lg mb-4">{{ $group->name }} Inventory</h3>

            <a href="{{ route('members.costumes.index', $group->id ?? 0) }}" 
                View Available Costumes
            </a>

            <a href="{{ route('members.costumes.assigned', $group->id ?? 0) }}" 
                My Assigned Costumes
            </a>
        </div>
    @endforeach
</x-app-layout>
