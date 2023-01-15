<?php

namespace Steven1303\AdminPanel\Controllers\Components;

use Livewire\Component;
use Steven1303\AdminPanel\Controllers\Layouts\App;

class Dashboard extends Component
{
    public function render()
    {
        return view('admin::livewire.dashboard')->layout(App::class);
    }
}
