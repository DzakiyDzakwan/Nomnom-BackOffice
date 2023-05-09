<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class User extends Component
{
    public function render()
    {
        return view('livewire.pages.user')->layout('master.layout', ['page'=>'user', 'title' => 'User Aplikasi']);
    }
}
