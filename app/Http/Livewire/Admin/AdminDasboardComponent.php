<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;


class AdminDasboardComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-dasboard-component')->layout('layouts.base');
    }
}
