<?php

namespace App\Http\Livewire\Components\Modals;

use App\Models\SubKategori;
use Livewire\Component;

class CreateSubcategory extends Component
{

    public $sub_id, $sub_kategori;

    protected $listeners = ['showCreate'];

    public function render()
    {
        return view('livewire.components.modals.create-subcategory');
    }

    public function showCreate() {
        $this->dispatchBrowserEvent('toggle-create');
    }

    public function save() {
        SubKategori::create([
            'id' => $this->sub_id,
            'nama_sub_kategori' => $this->sub_kategori
        ]);
        $item = [
            "message" => 'Sub Kategori <b>'. $this->sub_id .'</b> Berhasil Ditambahkan',
            'type' => 'success'
        ];
        $this->emit('alert', $item);
        $this->reset();
        $this->emit('save');
        $this->dispatchBrowserEvent('toggle-create');
    }
}
