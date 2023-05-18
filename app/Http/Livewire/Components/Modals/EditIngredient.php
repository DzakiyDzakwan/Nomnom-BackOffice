<?php

namespace App\Http\Livewire\Components\Modals;

use App\Models\Bahan;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditIngredient extends Component
{

    use WithFileUploads;
    public $id_bahan, $bahan, $harga, $satuan, $image;

    protected $listeners = ['showEdit'];

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
        $this->validate(
            [
                'bahan' => 'required|unique:App\Models\Bahan,nama_bahan',
                'harga' => 'required',
                'satuan' =>'required',
                'image' => 'required'
            ],
            [
                'bahan.required' => ':attribute tidak boleh kosong.',
                'bahan.unique' => ':attribute sudah tersedia.',
                'bahan.regex' => ':attribute hanya boleh terdiri dari huru.',
                
                'harga.required' => ':attribute tidak boleh kosong.',
                'harga.regex' => ':attribute hanya boleh terdiri dari angka',

                'satuan.required' => ':attribute tidak boleh kosong.',
                'satuan.regex' => ':attribute hanya boleh terdiri dari huruf',

                'image.required' => ':attribute tidak boleh kosong'

            ],
            [
                'bahan' => 'Bahan',
                'harga' => 'Harga',
                'satuan' => 'Satuan',
                'image' => 'Gambar Bahan'
            ]
        );

        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();

        try {
            $this->image->storeAs('public/images/bahan', $imageName);
            Bahan::where('id', $this->id_bahan)->update([
                'nama_bahan' => $this->bahan,
                'harga' => $this->harga.'/'.$this->satuan,
                'image' => $imageName
            ]);
            $item = [
                "message" => 'Bahan <b>'. $this->id_bahan .'</b> Berhasil diubah',
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
