<x-app-layout>
    <x-slot name="header">
        <h2>Member Dashboard</h2>
    </x-slot>
    
    @foreach(auth()->user()->memberGroups as $group)
        <div class="bg-white p-6 mt-6 shadow">
            <h3>{{ $group->name }} Inventory</h3>
            {{-- Group contents te --}}
        </div>
    @endforeach
</x-app-layout>
