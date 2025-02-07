<x-modal wire:model="addUserModal" title="Add User" persistent>
    {{-- <div>Hey!</div> --}}

    <x-form wire:submit="saveUser" no-separator>
        <div class="flex flex-col space-y-4">
            <x-input type="name" label="Name" wire:model="name" error-class="mt-1 text-sm text-red-500" />
            <x-input type="email" label="Email" wire:model="email" error-class="mt-1 text-sm text-red-500" />
            <x-select
                label="Section"
                :options="$sections"
                icon="o-user"
                option-value="id"
                option-label="program"
                placeholder="Select Section"
                placeholder-value="0"
                wire:model="section_id"
                error-class="mt-1 text-sm text-red-500"
            />
            <x-input type="password" label="Password" wire:model="password" error-class="mt-1 text-sm text-red-500" />

            <x-slot:actions>
                <x-button label="Cancel" @click="$wire.addUserModal = false" class="text-white secondary-custom" />
                <x-button label="Save" type="submit" class="text-white primary-custom" spinner="saveUser" />
            </x-slot:actions>
        </div>
    </x-form>
</x-modal>
