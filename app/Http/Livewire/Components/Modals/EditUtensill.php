<?php

namespace App\Http\Livewire\Components\Modals;

use Livewire\Component;
use App\Models\Peralatan;

class EditUtensill extends Component
{

    public $utensill_id, $utensill, $source;

    protected $listeners = ['showEdit'];

    public function render()
    {
        return view('livewire.components.modals.edit-utensill');
    }

    public function showEdit($id) {
        $old_utensill = Peralatan::where('id', $id)->first();
        $this->utensill_id = $old_utensill->id;
        $this->utensill = $old_utensill->nama_peralatan;
        $this->source = $old_utensill->bahan;
        $this->dispatchBrowserEvent('toggle-edit');
    }

    public function save() {

        $this->validate(
            [
                'utensill' => 'required | unique:App\Models\Peralatan,nama_peralatan',
                'source' => 'required'
            ],
            [
                'utensill.required' => ":attribute tidak boleh kosong",
                'source.required' => ':attribute tidak boleh kosong'
            ],
            [
                'utensill_id' => 'Peralatan ID',
                'utensill' => 'Alat',
                'source' => 'Bahan'
            ]
        );

        try {
            Peralatan::where('id', $this->utensill_id)->update([
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
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
