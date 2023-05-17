<?php

namespace App\Http\Livewire\Components\Modals;

use App\Models\SubKategori;
use Livewire\Component;

class EditSubcategory extends Component
{

    public $sub_id, $sub_kategori;

    protected $listeners = ['showEdit'];

    public function render()
    {
        return view('livewire.components.modals.edit-subcategory');
    }

    public function showEdit($id) {
        $old_sub_kategori = SubKategori::where('id', $id)->first();
        $this->sub_id = $old_sub_kategori->id;
        $this->sub_kategori = $old_sub_kategori->nama_sub_kategori;
        $this->dispatchBrowserEvent('toggle-edit');
    }

    public function save() {
        SubKategori::where('id', $this->sub_id)->update([
            'nama_sub_kategori' => $this->sub_kategori
        ]);
        $item = [
            "message" => 'Sub Kategori <b>'. $this->sub_id .'</b> Berhasil diubah',
            'type' => 'warning'
        ];
        $this->emit('alert', $item);
        $this->reset();
        $this->emit('update');
        $this->dispatchBrowserEvent('toggle-edit');
    }
}
