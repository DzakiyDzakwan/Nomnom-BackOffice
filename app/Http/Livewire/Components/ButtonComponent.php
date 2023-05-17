<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class ButtonComponent extends Component
{

    public $label, $class;

    public function render()
    {
        return view('livewire.components.button-component');
    }

    public function click() {
        dd('berhasil');
    }
}
