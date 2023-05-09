<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Category extends Component
{
    public function render()
    {
        return view('livewire.pages.category')->layout('master.layout', ['page'=>'category', 'title' => 'Kategori Resep']);
    }
}
