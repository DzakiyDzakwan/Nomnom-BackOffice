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
        $this->render();
        $this->type = $id['type'];
        $this->message = $id['message'];
        $this->dispatchBrowserEvent('show-alert');
    }
}
