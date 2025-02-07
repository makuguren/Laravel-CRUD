<?php

namespace App\Livewire\Admin\Students;

use App\Models\User;
use App\Models\Section;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Index extends Component
{
    public $addUserModal = false, $editUserModal = false, $deleteUserModal = false;
    public $id, $name, $email, $password;

    // Validations
    protected function rules(){
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|lowercase|max:255|unique:users,email',
            'password' => 'required',
        ];
    }

    public function updated($fields){
        $this->validateOnly($fields);
    }
    // Validations End

    public function saveUser(){
        $validatedData = $this->validate();

        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password'])
        ]);

        $this->addUserModal = false;
        toastr()->success('User Created Successfully');
    }

    public function editUser(int $user_id){
        $findUser = User::findOrFail($user_id);
        if($findUser){
            $this->id = $findUser->id;
            $this->name = $findUser->name;
            $this->email = $findUser->email;
            $this->editUserModal = true;
        } else {
            return redirect()->to('admin/users');
        }
    }

    public function updateUser(){
        $validatedData = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|lowercase|max:255',
            'password' => 'nullable|string|min:8|max:20'
        ]);

        $data = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
        ];

        if(!empty($validatedData['password'])){
            $data += [
                'password' => Hash::make($validatedData['password']),
            ];
        }

        User::where('id', $this->id)->update($data);
        $this->editUserModal = false;
        toastr()->success('User Updated Successfully');
    }

    public function deleteUser(int $user_id){
        $this->id = $user_id;
        $this->deleteUserModal = true;
    }

    public function destroyUser(){
        User::findOrFail($this->id)->delete();
        $this->deleteUserModal = false;
        toastr()->success('User Deleted Successfully');
    }

    public function render(){
        $users = User::all();
        $sections = Section::all();

        $headers = [
            ['key' => 'id', 'label' => '#'],
            ['key' => 'name', 'label' => 'NAME'],
            ['key' => 'section.program', 'label' => 'SECTION'],
            ['key' => 'email', 'label' => 'EMAIL'],
        ];

        return view('livewire.admin.students.index', [
            'users' => $users,
            'sections' => $sections,
            'headers' => $headers,
        ]);
    }
}
