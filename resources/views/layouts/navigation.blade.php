<nav x-data="{ open: false }" class="bg-white/90 backdrop-blur border-b border-[#e3e8e4] shadow-sm">
    <div class="page-container h-16 flex items-center justify-between">
        <div class="flex items-center gap-4">
            <a href="{{ route('dashboard') }}" class="flex items-center gap-2">
                <x-application-logo class="block h-9 w-auto" />
            </a>
            <div class="hidden sm:flex items-center gap-4 text-sm font-semibold text-[#0b2f26]">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-[#0b2f26] hover:text-[#125c4b]">
                    {{ __('Dashboard') }}
                </x-nav-link>
                <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')" class="text-[#0b2f26] hover:text-[#125c4b]">
                    {{ __('Perfil') }}
                </x-nav-link>
            </div>
        </div>

        <div class="hidden sm:flex items-center gap-3">
            <div class="pill">Portal seguro</div>
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="inline-flex items-center px-3 py-2 rounded-lg text-sm font-semibold text-[#0b2f26] bg-[#f6faf8] border border-[#e3e8e4] hover:bg-white shadow-sm transition">
                        <div>{{ Auth::user()->name }}</div>
                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Perfil') }}
                    </x-dropdown-link>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Sair') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>

        <div class="sm:hidden flex items-center">
            <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-[#125c4b] hover:bg-[#e3f7ef] focus:outline-none transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden border-t border-[#e3e8e4] bg-white">
        <div class="px-4 pt-4 pb-3 space-y-2 text-[#0b2f26]">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                {{ __('Perfil') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-3 pb-4 border-t border-[#e3e8e4] space-y-2 px-4">
            <div class="font-semibold text-base text-[#0b2f26]">{{ Auth::user()->name }}</div>
            <div class="text-sm text-gray-600">{{ Auth::user()->email }}</div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                    {{ __('Sair') }}
                </x-responsive-nav-link>
            </form>
        </div>
    </div>
</nav>
