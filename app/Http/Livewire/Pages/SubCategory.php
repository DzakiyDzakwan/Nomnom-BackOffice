<?php

namespace App\Http\Livewire\Pages;

use App\Models\SubKategori;
use Livewire\Component;

class SubCategory extends Component
{
    public function render()
    {

        $total = SubKategori::count();
        $subcategories = SubKategori::all();

        return view('livewire.pages.sub-category', compact('total','subcategories'))->layout('master.layout', ['page'=>'sub-category', 'title' => 'Sub Kategori Resep']);
    }
}
