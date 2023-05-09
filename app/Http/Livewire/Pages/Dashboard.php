<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.pages.dashboard')->layout('master.layout', ['page'=>'dashboard', 'title' => 'Dashboard']);
    }
}
