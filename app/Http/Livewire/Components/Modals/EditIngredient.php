<?php

namespace App\Http\Livewire\Components\Modals;

use App\Models\Bahan;
use Livewire\Component;

class EditIngredient extends Component
{

    public $id_bahan, $bahan, $harga, $satuan;

    protected $listeners = ['showEdit'];

    public function render()
    {
        return view('livewire.components.modals.edit-ingredient');
    }

    public function showEdit($id) {
        $old_bahan = Bahan::where('id', $id)->first();
        $this->id_bahan = $old_bahan->id;
        $this->bahan = $old_bahan->nama_bahan;
        $harga_satuan = explode("/",$old_bahan->harga);
        $this->harga = $harga_satuan[0];
        $this->satuan = $harga_satuan[1];
        $this->dispatchBrowserEvent('toggle-edit');
    }

    public function save() {
        Bahan::where('id', $this->id_bahan)->update([
            'nama_bahan' => $this->bahan,
            'harga' => $this->harga.'/'.$this->satuan
        ]);
        $item = [
            "message" => 'Bahan <b>'. $this->id_bahan .'</b> Berhasil diubah',
            'type' => 'warning'
        ];
        $this->emit('alert', $item);
        $this->reset();
        $this->emit('update');
        $this->dispatchBrowserEvent('toggle-edit');
    }
}
