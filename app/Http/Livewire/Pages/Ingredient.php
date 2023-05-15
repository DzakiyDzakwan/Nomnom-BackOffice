<?php

namespace App\Http\Livewire\Pages;

use App\Models\Bahan;
use Livewire\Component;

class Ingredient extends Component
{

    protected $listeners = ['save' => 'render', 'update' => 'render', 'delete'];

    public function render()
    {
        $total = Bahan::count();
        $bahan = Bahan::all();
        return view('livewire.pages.ingredient', compact('total', 'bahan'))->layout('master.layout', ['page'=>'ingredient', 'title' => 'Bahan Masakan']);
    }

    public function delete($id) {
        try {
            Bahan::where('id', $id)->delete();
            $this->dispatchBrowserEvent('toggle-delete');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
