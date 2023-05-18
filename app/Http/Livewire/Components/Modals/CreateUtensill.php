<?php

namespace App\Http\Livewire\Components\Modals;

use Livewire\Component;
use App\Models\Peralatan;

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

        $this->validate(
            [
                'utensill_id' => 'required|unique:App\Models\Peralatan,id|max:4|min:4|regex:/P+[0-9]{3}/',
                'utensill' => 'required',
                'source' => 'required'
            ],
            [
                'utensill_id.required' => ':attribute tidak boleh kosong',
                'utensill_id.unique' => ":attribute sudah tersedia",
                'utensill_id.max' => ":attribute hanya boleh terdiri dari 4 karakter",
                'utensill_id.regex' => "Format penulisan :attribute salah",

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
            Peralatan::create([
                'id' => $this->utensill_id,
                'nama_peralatan' => $this->utensill,
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
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
