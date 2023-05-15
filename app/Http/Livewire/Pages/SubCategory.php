<?php

namespace App\Http\Livewire\Pages;

use App\Models\SubKategori;
use Livewire\Component;

class SubCategory extends Component
{

    protected $listeners = ['save' => 'render', 'delete'];

    public function render()
    {

        $total = SubKategori::count();
        $subcategories = SubKategori::all();

        return view('livewire.pages.sub-category', compact('total','subcategories'))->layout('master.layout', ['page'=>'sub-category', 'title' => 'Sub Kategori Resep']);
    }

    public function delete($id) {
        try {
            SubKategori::where('id', $id)->delete();
            $this->dispatchBrowserEvent('toggle-delete');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}