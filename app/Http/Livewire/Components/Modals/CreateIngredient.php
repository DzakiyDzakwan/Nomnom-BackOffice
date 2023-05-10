<?php

namespace App\Http\Livewire\Components\Modals;

use Livewire\Component;
use App\Models\Bahan;
use GuzzleHttp\Psr7\Request;

class CreateIngredient extends Component
{

    public $id_bahan, $bahan, $harga, $satuan;

    protected $listeners = ['showCreate'];

    public function render()
    {
        return view('livewire.components.modals.create-ingredient');
    }

    public function showCreate() {
        $this->dispatchBrowserEvent('toggle-create');
    }

    public function save() {
        Bahan::create([
            'id' => $this->id_bahan,
            'nama_bahan' => $this->bahan,
            'harga' => $this->harga.'/'.$this->satuan
        ]);
        $this->reset();
        $this->emit('save');
        $this->dispatchBrowserEvent('toggle-create');
    }
}
