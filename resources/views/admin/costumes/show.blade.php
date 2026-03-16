<x-app-layout>
    <x-slot name="header">
        <h2>{{ $costume->name }} Inventory</h2>
    </x-slot>

    <div class="mt-6 pb-6">
        <form action="{{ route('admin.costumes.destroy', $costume->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this costume?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-brand-secondary hover:bg-brand-primary text-white px-4 py-2 rounded">
                Delete Costume
            </button>
        </form>
    </div>

    <div class="space-y-3">
        @foreach($items as $item)
            <div class="bg-white p-4 shadow rounded">
                <p>Item ID: {{ $item->id }}</p>

                @if($item->assigned_to)
                    <p class="text-red-600">
                        Assigned to: {{ $item->user->name }}
                    </p>
                @else
                    <p class="text-green-600">
                        Available
                    </p>
                @endif

                <div class="mt-2">
                    {!! QrCode::size(120)->generate(url('/scan/'.$item->qr_code)) !!}

                    <a href="{{ route('qr.download', $item->qr_code) }}"
                        class="text-green-600 underline">
                        Download
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>


