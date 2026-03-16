<x-app-layout>
    <x-slot name="header">
        Members List
    </x-slot>

    <div class="p-6">
        <table class="w-full border">
            <thead>
                <tr class="bg-gray-100">
                    <th class="p-2 border">Name</th>
                    <th class="p-2 border">Email</th>
                    <th class="p-2 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($members as $member)
                    <tr>
                        <td class="p-2 border">{{ $member->name }}</td>
                        <td class="p-2 border">{{ $member->email }}</td>
                        <td class="p-2 border space-x-2">
                            <a href="{{ route('admin.members.show', $member) }}"
                               class="bg-brand-secondary text-white px-3 py-1 rounded">
                                View
                            </a>

                            <form action="{{ route('admin.members.destroy', $member) }}"
                                  method="POST"
                                  class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        onclick="return confirm('Delete this member?')"
                                        class="bg-brand-secondary text-white px-3 py-1 rounded">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="p-4 text-center">
                            No members found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
