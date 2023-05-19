<?php

namespace App\Http\Livewire\Pages;

use App\Models\User as ModelsUser;
use Livewire\Component;

class User extends Component
{
    public function render()
    {
        $total = ModelsUser::where('role', 3)->count();
        $users = ModelsUser::where('role', 3)->get();
        return view('livewire.pages.user', compact('total', 'users'))->layout('master.layout', ['page'=>'user', 'title' => 'User Aplikasi']);
    }
}
