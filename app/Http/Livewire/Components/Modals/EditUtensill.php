<?php

namespace App\Http\Livewire\Components\Modals;

use App\Models\Utensill as UtensillModel;
use Livewire\Component;

class EditUtensill extends Component
{

    public $utensill_id, $utensill, $source;

    protected $listeners = ['showEdit'];

    public function render()
    {
        return view('livewire.components.modals.edit-utensill');
    }

    public function showEdit($id) {
        $old_utensill = UtensillModel::where('id', $id)->first();
        $this->utensill_id = $old_utensill->id;
        $this->utensill = $old_utensill->nama_perlengkapan;
        $this->source = $old_utensill->bahan;
        $this->dispatchBrowserEvent('toggle-edit');
    }

    public function save() {
        UtensillModel::where('id', $this->utensill_id)->update([
            'nama_perlengkapan' => $this->utensill,
            'bahan' => $this->source
        ]);
        $item = [
            "message" => 'Alat <b>'. $this->utensill_id .'</b> Berhasil diubah',
            'type' => 'warning'
        ];
        $this->emit('alert', $item);
        $this->reset();
        $this->emit('update');
        $this->dispatchBrowserEvent('toggle-edit');
    }
}
