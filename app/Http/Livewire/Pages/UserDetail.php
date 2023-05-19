<?php

namespace App\Http\Livewire\Pages;

use App\Models\User;
use Livewire\Component;

class UserDetail extends Component
{
    public $data;

    public function mount($id) {
        $this->data = User::find($id);
    }

    public function render()
    {
        return view('livewire.pages.user-detail')->layout('master.layout', ['page'=>'user', 'title' => 'Detail User']);
    }
}
