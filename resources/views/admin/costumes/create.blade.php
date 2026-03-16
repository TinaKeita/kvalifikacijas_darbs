<x-app-layout>
    <x-slot name="header">
        <h2>Create Costume</h2>
    </x-slot>

    <form method="POST" action="{{ route('admin.costumes.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="border p-2 w-full" required autocomplete="name">
        </div>

        <div class="mb-4">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="border p-2 w-full" required min="1" autocomplete="off">
        </div>

        <div class="mb-4">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="border p-2 w-full" accept="image/*" required autocomplete="off">
        </div>

        <button class="bg-brand-secondary text-white px-4 py-2 rounded">
            Create
        </button>
    </form>
</x-app-layout>
