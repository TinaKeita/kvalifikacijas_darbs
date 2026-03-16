<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-bold">Costumes</h2>
    </x-slot>

    <a href="{{ route('admin.costumes.create') }}"
       class="bg-brand-secondary text-white px-4 py-2 rounded">
        Add Costume
    </a>

    <div class="mt-6 space-y-4">
        @foreach($costumes as $costume)
            <div class="bg-white p-4 shadow rounded flex justify-between">
                <span>{{ $costume->name }}</span>
                <a href="{{ route('admin.costumes.show', $costume) }}"
                   class="text-blue-600">
                    View
                </a>
            </div>
        @endforeach
    </div>
</x-app-layout>
