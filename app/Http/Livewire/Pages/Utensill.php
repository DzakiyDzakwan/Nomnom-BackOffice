<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Utensill extends Component
{
    public function render()
    {
        return view('livewire.pages.utensill')->layout('master.layout', ['page'=>'utensill', 'title' => 'Peralatan Dapur']);
    }
}
