<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Button extends Component
{
    public $label, $class;

    public function render()
    {
        return view('livewire.button');
    }
}
