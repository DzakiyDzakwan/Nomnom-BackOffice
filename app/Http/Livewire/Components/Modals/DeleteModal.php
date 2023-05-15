<?php

namespace App\Http\Livewire\Components\Modals;

use App\Models\Kategori;
use Livewire\Component;

class DeleteModal extends Component
{

    public $type, $item;

    protected $listeners = ['showDelete'];

    public function render()
    {
        return view('livewire.components.modals.delete-modal');
    }

    public function showDelete($id) {
        $this->item = $id;
        $this->dispatchBrowserEvent('toggle-delete');
    }
}
