<x-app-layout>
    <x-slot name="header">
        <h2>Create Costume</h2>
    </x-slot>

    <form method="POST" action="{{ route('admin.costumes.store') }}">
        @csrf

        <div class="mb-4">
            <label>Name</label>
            <input type="text" name="name"
                   class="border p-2 w-full" required>
        </div>

        <div class="mb-4">
            <label>Quantity</label>
            <input type="number" name="quantity"
                   class="border p-2 w-full" required min="1">
        </div>

        <div class="mb-4">
            <label>Image</label>
            <input type="file" name="image" class="border p-2 w-full" accept="image/*" required>
        </div>

        <button class="bg-green-500 text-white px-4 py-2 rounded">
            Create
        </button>
    </form>
</x-app-layout>
