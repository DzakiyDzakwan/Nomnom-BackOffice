<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Test extends Component
{

    public function render()
    {
        return view('livewire.pages.test')->layout('master.layout', ['page'=>'dashboard', 'title' => 'Test Title']);
    }

    public function click() {
        dd($this->sidebar);
    }

}
