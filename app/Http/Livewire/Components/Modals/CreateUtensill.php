<?php

namespace App\Http\Livewire\Components\Modals;

use Livewire\Component;
use App\Models\Peralatan;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class CreateUtensill extends Component
{

    use WithFileUploads;

    public $utensill_id, $utensill, $source, $image;

    protected $listeners = ['showCreate'];

    public function updated($fields) {
        $this->validate(
            [
                'image' => 'image|max:5000'
            ],
            [
                'image.image' => ':attribute harus berupa gambar',
                'image.max' => 'Ukuran :attribute tidak boleh lebih besar dari 5mb'

            ],
            [
                'image' => 'Gambar Alat'
            ]
            );
    }

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
                'source' => 'required',
                'image' => 'required'
            ],
            [
                'utensill_id.required' => ':attribute tidak boleh kosong',
                'utensill_id.unique' => ":attribute sudah tersedia",
                'utensill_id.max' => ":attribute hanya boleh terdiri dari 4 karakter",
                'utensill_id.regex' => "Format penulisan :attribute salah",

                'utensill.required' => ":attribute tidak boleh kosong",
                'source.required' => ':attribute tidak boleh kosong',
                'image.required' => ':attribute tidak boleh kosong'
            ],
            [
                'utensill_id' => 'Peralatan ID',
                'utensill' => 'Alat',
                'source' => 'Bahan',
                'image' => 'Gambar Alat'
            ]
        );

        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();

        try {
            $this->image->storeAs('public/images/peralatan', $imageName);
            Peralatan::create([
                'id' => $this->utensill_id,
                'nama_peralatan' => $this->utensill,
                'bahan' => $this->source,
                'image' => $imageName
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
