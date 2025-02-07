<x-slot:title>Students</x-slot>

<div>
    @include('livewire.admin.students.create')
    @include('livewire.admin.students.edit')
    @include('livewire.admin.students.delete')

    <x-header title="Students" subtitle="">
        <x-slot:actions>
            {{-- <x-button icon="o-funnel" />
            <x-button icon="o-plus" class="btn-primary" /> --}}
            <x-button @click="$wire.addUserModal = true" icon="o-user-plus" responsive class="text-white bg-blue-700 hover:bg-blue-500">
                Add Student
            </x-button>
        </x-slot:actions>
    </x-header>

    <x-card class="bg-base-300">
        {{-- <div class="mb-6 font-bold text-medium">Hello World</div> --}}
        <x-table :headers="$headers" :rows="$users" striped>

            {{-- Notice `$user` is the current row item on loop --}}
            @scope('cell_id', $user)
                <strong>{{ $user->id }}</strong>
            @endscope

            {{-- You can name the injected object as you wish  --}}
            @scope('cell_name', $user)
                {{ $user->name }}
            @endscope

            {{-- You can name the injected object as you wish  --}}
            @scope('cell_section.program', $user)
                {{ $user->section->program ?? 'No Section Found' }}
            @endscope

            {{-- Notice the `dot` notation for nested attribute cell's slot --}}
            @scope('cell_email', $user)
                {{ $user->email }}
            @endscope

            {{-- Special `actions` slot --}}
            @scope('actions', $user)
                <div class="flex flex-row gap-2">
                    <x-button icon="o-pencil-square" wire:click="editUser({{ $user->id }})" spinner class="text-white bg-blue-700 hover:bg-blue-500 btn-sm" />
                    <x-button icon="o-trash" wire:click="deleteUser({{ $user->id }})" spinner class="text-white bg-red-700 hover:bg-red-500 btn-sm" />
                </div>
            @endscope

            <x-slot:empty>
                <x-icon name="o-user-plus" label="User is Empty" class="font-bold"/>
            </x-slot:empty>
        </x-table>
    </x-card>
</div>
