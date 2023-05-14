<?php

namespace App\Http\Livewire\Pages;

use App\Models\Kategori;
use Livewire\Component;

class Category extends Component
{

    protected $listeners = ['save' => 'render'];

    public function render()
    {
        $total = Kategori::count();
        $categories = Kategori::all();
        return view('livewire.pages.category', compact('total','categories'))->layout('master.layout', ['page'=>'category', 'title' => 'Kategori Resep']);
    }
}
