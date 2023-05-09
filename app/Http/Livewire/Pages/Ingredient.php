<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Ingredient extends Component
{
    public function render()
    {
        return view('livewire.pages.ingredient')->layout('master.layout', ['page'=>'ingredient', 'title' => 'Bahan Masakan']);
    }
}
