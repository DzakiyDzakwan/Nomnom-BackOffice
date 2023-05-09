<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class UserDetail extends Component
{
    public function render()
    {
        return view('livewire.pages.user-detail')->layout('master.layout', ['page'=>'user-detail', 'title' => 'Detail User']);
    }
}
