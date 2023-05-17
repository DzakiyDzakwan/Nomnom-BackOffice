<?php

namespace App\Http\Livewire\Pages;

use App\Models\Utensill as ModelsUtensill;
use Livewire\Component;

class Utensill extends Component
{

    protected $listeners = ['save'=> 'render', 'update' =>'render', 'delete'];

    public function render()
    {
        $total = ModelsUtensill::count();
        $utensills = ModelsUtensill::all();
        return view('livewire.pages.utensill', compact('total', 'utensills'))->layout('master.layout', ['page'=>'utensill', 'title' => 'Peralatan Dapur']);
    }

    public function delete($id) {
        try {
            ModelsUtensill::where('id', $id)->delete();
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
