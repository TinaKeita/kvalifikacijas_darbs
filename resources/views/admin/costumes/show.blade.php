<x-app-layout>
    <x-slot name="header">
        <h2>{{ $costume->name }} Inventory</h2>
    </x-slot>

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
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
