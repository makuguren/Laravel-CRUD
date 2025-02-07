<x-modal wire:model="editUserModal" title="Edit User" persistent>
    {{-- <div>Hey!</div> --}}

    <x-form wire:submit="updateUser" no-separator>
        <div class="flex flex-col space-y-4">
            <x-input type="name" label="Name" wire:model="name" error-class="mt-1 text-sm text-red-500" />
            <x-input type="email" label="Email" wire:model="email" error-class="mt-1 text-sm text-red-500" />
            <x-input type="password" label="Password" wire:model="password" error-class="mt-1 text-sm text-red-500" />

            <x-slot:actions>
                <x-button label="Cancel" @click="$wire.editUserModal = false" class="text-white secondary-custom" />
                <x-button label="Update" type="submit" class="text-white primary-custom" spinner="updateUser" />
            </x-slot:actions>
        </div>
    </x-form>
</x-modal>
