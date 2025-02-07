<x-modal wire:model="deleteUserModal" title="Delete User" persistent>
    <x-form wire:submit="destroyUser" no-separator>
        <div>Are you sure you want to delete this User?</div>
        <x-slot:actions>
            <x-button label="Cancel" @click="$wire.deleteUserModal = false" class="text-white secondary-custom" />
            <x-button label="Delete" type="submit" class="text-white primary-custom" spinner="destroyUser" />
        </x-slot:actions>
    </x-form>
</x-modal>
