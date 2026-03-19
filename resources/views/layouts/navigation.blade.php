<nav class="flex h-full flex-col px-4 py-6">

    {{-- User info block --}}
    <div class="mb-6 border-b border-white/10 pb-5">
        <p class="text-sm font-medium text-white/80 truncate">{{ Auth::user()->name }}</p>
        <p class="text-xs text-white/40 truncate">{{ Auth::user()->email }}</p>
    </div>

    {{-- Main nav links --}}
    <div class="flex flex-col gap-1">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-nav-link>

        @role('admin')
            <x-nav-link :href="route('admin.members.index')" :active="request()->routeIs('admin.members.*')">
                {{ __('Members') }}
            </x-nav-link>

            <x-nav-link :href="route('admin.costumes.index')" :active="request()->routeIs('admin.costumes.*')">
                {{ __('Costumes') }}
            </x-nav-link>
        @endrole
    </div>

    {{-- Bottom: Profile + Logout --}}
    <div class="mt-auto flex flex-col gap-1 border-t border-white/15 pt-5">
        <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.*')">
            {{ __('Profile') }}
        </x-nav-link>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="flex w-full items-center gap-2 rounded-md border-l-2 border-transparent px-3 py-2 text-sm font-medium text-white/60 hover:bg-black/8 hover:text-white/85 transition duration-150">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>

</nav>
