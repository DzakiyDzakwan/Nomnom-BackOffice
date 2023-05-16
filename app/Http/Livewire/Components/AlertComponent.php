<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class AlertComponent extends Component
{

    public $message, $type;

    protected $listeners = ['alert'];

    public function render()
    {
        return view('livewire.components.alert-component');
    }

    public function alert($id) {
        $this->message = $id['message'];
        $this->type = $id['type'];
        $this->dispatchBrowserEvent('show-alert');
    }
}
