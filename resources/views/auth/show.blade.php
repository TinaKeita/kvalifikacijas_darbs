<x-app-layout>
    <x-slot name="header">
        Member Details
    </x-slot>

    <div class="p-6">
        <div class="bg-white p-6 shadow rounded">
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Created:</strong> {{ $user->created_at }}</p>
        </div>
    </div>
</x-app-layout>
