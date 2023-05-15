<?php

namespace App\Http\Livewire\Pages;

use App\Models\Kategori;
use Livewire\Component;

class Category extends Component
{

    protected $listeners = ['save' => 'render', 'delete'];

    public function render()
    {
        $total = Kategori::count();
        $categories = Kategori::all();
        return view('livewire.pages.category', compact('total','categories'))->layout('master.layout', ['page'=>'category', 'title' => 'Kategori Resep']);
    }

    public function delete($id) {
        try {
            Kategori::where('id', $id)->delete();
            $this->dispatchBrowserEvent('toggle-delete');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
