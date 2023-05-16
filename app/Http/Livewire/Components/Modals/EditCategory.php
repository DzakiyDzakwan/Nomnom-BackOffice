<?php

namespace App\Http\Livewire\Components\Modals;

use App\Models\Kategori;
use App\Models\SubKategori;
use Livewire\Component;

class EditCategory extends Component
{

    public $kategori_id, $kategori, $sub_kategori;

    protected $listeners = ['showEdit'];

    public function render()
    {
        $sub_list = SubKategori::all();
        return view('livewire.components.modals.edit-category', compact('sub_list'));
    }

    public function showEdit($id) {
        $old_kategori = Kategori::where('id', $id)->first();
        $this->kategori_id = $old_kategori->id;
        $this->kategori = $old_kategori->nama_kategori;
        $this->sub_kategori = $old_kategori->sub_kategori_id;
        $this->dispatchBrowserEvent('toggle-edit');
    }

    public function save() {
        Kategori::where('id', $this->kategori_id)->update([
            'nama_kategori' => $this->kategori,
            'sub_kategori_id' => $this->sub_kategori
        ]);
        
        $this->reset();
        $this->emit('update');
        $this->dispatchBrowserEvent('toggle-edit');
    }
}
