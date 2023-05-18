<?php

namespace App\Http\Livewire\Components\Modals;

use App\Models\Kategori;
use App\Models\SubKategori;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditCategory extends Component
{

    use WithFileUploads;

    public $kategori_id, $kategori, $sub_kategori, $image;

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
                'image' => 'Gambar Kategori'
            ]
            );
    }

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
        $this->validate(
            [
            'sub_kategori' => 'required',
            'kategori' => 'required|unique:App\Models\Kategori,nama_kategori|regex:/[A-Za-z]/',
            'image' => 'required'
            ],
            [
                'sub_kategori.required' => ':attribute tidak boleh kosong.',

                'kategori.required' => ':attribute tidak boleh kosong.',
                'kategori.unique' => ':attribute sudah tersedia.',
                'kategori.regex' => ':attribute hanya boleh terdiri dari huruf.',

                'image.required' => ':attribute tidak boleh kosong'
            ],
            [
                'sub_kategori' => 'Sub Kategori',
                'kategori' => 'Kategori',
                'image' => 'Gambar Kategori'
            ]
        );

        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();

        try {
            $this->image->storeAs('public/images/kategori', $imageName);

            Kategori::where('id', $this->kategori_id)->update([
                'nama_kategori' => $this->kategori,
                'sub_kategori_id' => $this->sub_kategori,
                'image' => $imageName
            ]);
            
            $item = [
                "message" => 'Kategori <b>'. $this->kategori_id .'</b> Berhasil diubah',
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
