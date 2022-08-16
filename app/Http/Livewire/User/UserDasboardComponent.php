<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserDasboardComponent extends Component
{
    public function render()
    {
        return view('livewire.user.user-dasboard-component')->layout('layouts.base');
    }
}
