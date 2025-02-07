<x-slot:sidebar drawer="main-drawer" collapsible class="bg-base-200">

    {{-- User --}}
    @if($user = auth()->user())
        <x-list-item :item="$user" value="name" sub-value="email" no-separator no-hover class="pt-2">
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                {{-- <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link> --}}

                <x-slot:actions>
                    <x-button icon="o-power" class="btn-circle btn-ghost btn-xs" tooltip-left="Log Out" no-wire-navigate link="{{ route('logout') }}" />
                </x-slot:actions>
            </form>
        </x-list-item>

        <x-menu-separator />
    @endif

    {{-- Activates the menu item when a route matches the `link` property --}}
    <x-menu activate-by-route>
        {{-- <x-menu-item title="Dashboard" icon="o-home" link="{{ route('admin.dashboard.index') }}" /> --}}
        <x-menu-item title="Users" icon="o-users" link="{{ route('admin.students.index') }}" />
        {{-- <x-menu-item title="Pricings" icon="o-users" link="{{ route('admin.pricings.index') }}" />
        <x-menu-item title="Licenses" icon="o-users" link="{{ route('admin.licenses.index') }}" />
        <x-menu-item title="Payments" icon="o-users" link="{{ route('admin.payments.index') }}" /> --}}
        {{-- <x-menu-sub title="Settings" icon="o-cog-6-tooth">
            <x-menu-item title="Wifi" icon="o-wifi" link="####" />
            <x-menu-item title="Archives" icon="o-archive-box" link="####" />
        </x-menu-sub> --}}
    </x-menu>
</x-slot:sidebar>
