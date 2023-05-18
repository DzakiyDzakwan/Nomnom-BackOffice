<?php

namespace App\Http\Livewire\Components\Modals;

use Livewire\Component;
use App\Models\Bahan;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class CreateIngredient extends Component
{

    use WithFileUploads;

    public $bahan_id, $bahan, $harga, $satuan, $image;

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
                'image' => 'Gambar Bahan'
            ]
            );
    }

    public function render()
    {
        return view('livewire.components.modals.create-ingredient');
    }

    public function showCreate() {
        $this->dispatchBrowserEvent('toggle-create');
    }

    public function save() {

        $this->validate(
            [
                'bahan_id' => 'required|unique:App\Models\Bahan,id|max:4|min:4|regex:/B+[0-9]{3}/',
                'bahan' => 'required|unique:App\Models\Bahan,nama_bahan|regex:/[A-za-z]/',
                'harga' => 'required|regex:/^[1-9]/',
                'satuan' =>'required|regex:/[A-Za-z]/',
                'image' => 'required'
            ],
            [
                'bahan_id.required' => ':attribute tidak boleh kosong.',
                'bahan_id.unique' => ':attribute sudah tersedia.',
                'bahan_id.max' => ':attribute hanya boleh terdiri dari 4 karakter.',
                'bahan_id.min' => ':attribute hanya boleh terdiri dari 4 karakter.',
                'bahan_id.regex' => 'Format penulisan :attribute salah.',

                'bahan.required' => ':attribute tidak boleh kosong.',
                'bahan.unique' => ':attribute sudah tersedia.',
                'bahan.regex' => ':attribute hanya boleh terdiri dari huruf.',
                
                'harga.required' => ':attribute tidak boleh kosong.',
                'harga.regex' => ':attribute hanya boleh terdiri dari angka',

                'satuan.required' => ':attribute tidak boleh kosong.',
                'satuan.regex' => ':attribute hanya boleh terdiri dari huruf',

                'image.required' => ':attribute tidak boleh kosong'

            ],
            [
                'bahan_id' => 'Bahan ID',
                'bahan' => 'Bahan',
                'harga' => 'Harga',
                'satuan' => 'Satuan',
                'image' => 'Gambar Bahan'
            ]
        );

        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();

        try {
            $this->image->storeAs('public/images/bahan', $imageName);
            Bahan::create([
                'id' => $this->bahan_id,
                'nama_bahan' => $this->bahan,
                'harga' => $this->harga.'/'.$this->satuan,
                'image' => $imageName
            ]);
            $item = [
                "message" => 'Bahan <b>'. $this->bahan_id .'</b> Berhasil ditambahkan',
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
