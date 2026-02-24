<x-app-layout>
    <x-slot name="header">Create New Member</x-slot>
    
    <form method="POST" action="{{ route('admin.members.store') }}">
        @csrf
        <div class="mb-4">
            <label>Name</label>
            <input type="text" name="name" class="border p-2 w-full" required>
        </div>
        <div class="mb-4">
            <label>Email</label>
            <input type="email" name="email" class="border p-2 w-full" required>
        </div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2">Create Member</button>
    </form>
</x-app-layout>
