<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\Peralatan;

class Utensill extends Component
{

    protected $listeners = ['save'=> 'render', 'update' =>'render', 'delete'];

    public function render()
    {
        $total = Peralatan::count();
        $utensills = Peralatan::all();
        return view('livewire.pages.utensill', compact('total', 'utensills'))->layout('master.layout', ['page'=>'utensill', 'title' => 'Peralatan Dapur']);
    }

    public function delete($id) {
        try {
            Peralatan::where('id', $id)->delete();
            $item = [
                "message" => 'Alat <b>'. $id .'</b> Berhasil dihapus',
                'type' => 'danger'
            ];
            $this->emit('alert', $item);
            $this->dispatchBrowserEvent('toggle-delete');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
