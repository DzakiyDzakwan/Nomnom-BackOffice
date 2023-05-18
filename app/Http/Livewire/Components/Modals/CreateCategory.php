<?php

namespace App\Http\Livewire\Components\Modals;

// use App\Models\Kategori;

use App\Models\Kategori;
use App\Models\SubKategori;
use Livewire\Component;

class CreateCategory extends Component
{

    public $kategori_id, $kategori, $sub_kategori;

    protected $listeners = ['showCreate'];

    public function render()
    {
        $sub_list = SubKategori::all();
        return view('livewire.components.modals.create-category', compact('sub_list'));
    }

    public function showCreate() {
        $this->dispatchBrowserEvent('toggle-create');
    }

    public function save() {
        $this->validate(
            [
                'kategori_id' => 'required|unique:App\Models\Kategori,id|max:4|regex:/C+[0-9]{3}/',
                'sub_kategori' => 'required',
                'kategori' => 'required|unique:App\Models\Kategori,nama_kategori|regex:/[A-Za-z]/',
            ],
            [
                'kategori_id.required' => ':attribute tidak boleh kosong.',
                'kategori_id.unique' => ':attribute sudah tersedia.',
                'kategori_id.max' => ':attribute hanya boleh terdiri dari 4 karakter.',
                'kategori_id.min' => ':attribute hanya boleh terdiri dari 4 karakter.',
                'kategori_id.regex' => 'Format penulisan :attribute salah.',

                'sub_kategori.required' => ':attribute tidak boleh kosong.',
                
                'kategori.required' => ':attribute tidak boleh kosong.',
                'kategori.unique' => ':attribute sudah tersedia.',
                'kategori.regex' => ':attribute hanya boleh terdiri dari huruf'

            ],
            [
                'kategori_id' => 'Kategori ID',
                'sub_kategori' => 'Sub Kategori',
                'kategori' => 'Kategori'
            ]
        );

        try {
            Kategori::create([
                'id' => $this->kategori_id,
                'nama_kategori' => $this->kategori,
                'sub_kategori_id' => $this->sub_kategori
            ]);
    
            $item = [
                "message" => 'Kategori <b>'. $this->kategori_id .'</b> Berhasil ditambahkan',
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
