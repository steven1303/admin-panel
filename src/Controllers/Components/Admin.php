<?php

namespace Steven1303\AdminPanel\Controllers\Components;

use Livewire\Component;
use Steven1303\AdminPanel\Controllers\Layouts\App;
use Steven1303\AdminPanel\Models\Admin as ModelsAdmin;

class Admin extends Component
{
    
    public $username, $alias, $role_id;
    public $modals = false;
    
    protected $rules = [
        'username'=> ['required', 'unique:admins,username'],
        'email'=> ['required', 'unique:admins,email'],
        'alias' => ['required'],
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function openModalAdmin()
    {
        $this->resetErrorBag();
        $this->modals = true;
    }

    public function store(){
        ModelsAdmin::create([
            'username' => $this->username,
            'alias' => $this->alias,
            'role_id' => $this->role_id,
        ]);
        session()->flash('success','Admin Created');

        $this->reset();
    }

    public function render()
    {
        return view('admin::livewire.admin')->layout(App::class);
    }
}
