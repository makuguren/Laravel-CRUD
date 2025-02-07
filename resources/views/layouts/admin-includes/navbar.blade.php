<x-nav sticky full-width>

    <x-slot:brand>
        {{-- Drawer toggle for "main-drawer" --}}
        <label for="main-drawer" class="mr-3 lg:hidden">
            <x-icon name="o-bars-3" class="cursor-pointer" />
        </label>

        <div class="flex flex-row items-center space-x-2">
            <strong class="hidden text-xl font-bold text-gradient lg:block">TECHXPLOSION</strong>
        </div>
    </x-slot:brand>

    {{-- Right side actions --}}
    <x-slot:actions>
        <x-button label="Messages" icon="o-envelope" link="###" class="btn-ghost btn-sm" responsive />
        <x-button label="Notifications" icon="o-bell" link="###" class="btn-ghost btn-sm" responsive />
    </x-slot:actions>
</x-nav>
