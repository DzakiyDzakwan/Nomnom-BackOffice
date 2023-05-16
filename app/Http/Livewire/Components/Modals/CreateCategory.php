<?php

namespace App\Http\Livewire\Components\Modals;

// use App\Models\Kategori;

use App\Models\Kategori;
use App\Models\SubKategori;
use Livewire\Component;

class CreateCategory extends Component
{

    public $kategori_id, $kategori, $sub_kategori;

    protected $listeners = ['showCreate'];

    public function render()
    {
        $sub_list = SubKategori::all();
        return view('livewire.components.modals.create-category', compact('sub_list'));
    }

    public function showCreate() {
        $this->dispatchBrowserEvent('toggle-create');
    }

    public function save() {
        Kategori::create([
            'id' => $this->kategori_id,
            'nama_kategori' => $this->kategori,
            'sub_kategori_id' => $this->sub_kategori
        ]);

        $item = [
            "message" => 'Kategori <b>'. $this->kategori_id .'</b> Berhasil ditambahkan',
            'type' => 'success'
        ];
        $this->emit('alert', $item);
        $this->reset();
        $this->emit('save');
        $this->dispatchBrowserEvent('toggle-create');
    }
}
