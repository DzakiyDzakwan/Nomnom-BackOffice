<?php

namespace App\Http\Livewire\Components\Modals;

use App\Models\SubKategori;
use Livewire\Component;

class CreateSubcategory extends Component
{

    public $sub_id, $sub_kategori;

    protected $listeners = ['showCreate'];

    public function render()
    {
        return view('livewire.components.modals.create-subcategory');
    }

    public function showCreate() {
        $this->dispatchBrowserEvent('toggle-create');
    }

    public function save() {
        $this->validate(
            [
                'sub_id' => 'required|unique:App\Models\SubKategori,id|max:5|min:5|regex:/SC[0-9]{3}/',
                'sub_kategori' => 'required|unique:App\Models\SubKategori,nama_sub_kategori|regex:/[A-Za-z]/'
            ],
            [
                'sub_id.required' => ':attribute tidak boleh kosong',
                'sub_id.unique' => ':attribute sudah tersedia',
                'sub_id.max' => ':attribute hanya boleh terdiri dari 5 karakter.',
                'sub_id.min' => ':attribute hanya boleh terdiri dari 5 karakter.',
                'sub_id.regex' => 'Format penulisan :attribute salah',

                'sub_kategori.required' => ':attribute tidak boleh kosong',
                'sub_kategori.unique' => ':attribute sudah tersedia',
                'sub_kategori.regex' => ':attribute hanya boleh terdiri dari huruf'
            ],
            [
                'sub_id' => 'Sub Kategori ID',
                'sub_kategori' => 'Sub Kategori'
            ]
        );
        
        try {
            SubKategori::create([
                'id' => $this->sub_id,
                'nama_sub_kategori' => $this->sub_kategori
            ]);
            $item = [
                "message" => 'Sub Kategori <b>'. $this->sub_id .'</b> Berhasil Ditambahkan',
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
