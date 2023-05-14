<?php

namespace App\Http\Livewire\Pages;

use App\Models\Utensill as ModelsUtensill;
use Livewire\Component;

class Utensill extends Component
{

    protected $listeners = ['save'=> 'render'];

    public function render()
    {
        $total = ModelsUtensill::count();
        $utensills = ModelsUtensill::all();
        return view('livewire.pages.utensill', compact('total', 'utensills'))->layout('master.layout', ['page'=>'utensill', 'title' => 'Peralatan Dapur']);
    }
}
