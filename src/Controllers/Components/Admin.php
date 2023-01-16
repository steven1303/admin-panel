<?php

namespace Steven1303\AdminPanel\Controllers\Components;

use Livewire\Component;
use Steven1303\AdminPanel\Controllers\Layouts\App;

class Admin extends Component
{
    public function render()
    {
        return view('admin::livewire.admin')->layout(App::class);
    }
}
