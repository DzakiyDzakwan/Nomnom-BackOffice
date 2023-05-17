<?php

namespace App\Http\Livewire\Components\Modals;

use Livewire\Component;
use App\Models\Utensill as UtensillModel;

class CreateUtensill extends Component
{

    public $utensill_id, $utensill, $source;

    protected $listeners = ['showCreate'];

    public function render()
    {
        return view('livewire.components.modals.create-utensill');
    }

    public function showCreate() {
        $this->dispatchBrowserEvent('toggle-create');
    }

    public function save() {
        UtensillModel::create([
            'id' => $this->utensill_id,
            'nama_perlengkapan' => $this->utensill,
            'bahan' => $this->source
        ]);
        $item = [
            "message" => 'Alat <b>'. $this->utensill_id .'</b> Berhasil ditambahkan',
            'type' => 'success'
        ];
        $this->emit('alert', $item);
        $this->reset();
        $this->emit('save');
        $this->dispatchBrowserEvent('toggle-create');
    }
}
