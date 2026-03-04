<x-app-layout>
    <x-slot name="header">
        <h2>My Costumes</h2>
    </x-slot>

    @foreach($items as $item)
        <div class="bg-white p-4 shadow rounded mb-3">
            <p>{{ $item->costume->name }}</p>

            <form method="POST"
                  action="{{ route('members.costumes.unassign', $item) }}">
                @csrf
                <button class="bg-red-500 text-white px-3 py-1 rounded">
                    Unassign
                </button>
            </form>
        </div>
    @endforeach
</x-app-layout>
