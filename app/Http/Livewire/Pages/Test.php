<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use Livewire\WithFileUploads;

class Test extends Component
{

    use WithFileUploads;

    public $file;

    /* public function updated($value) {
        dd($value);
    } */

    public function render()
    {
        return view('livewire.pages.test')->layout('master.layout', ['page'=>'dashboard', 'title' => 'Test Title']);
    }

    public function save() {
        $this->validate([
            'file' => 'image|max:3000', // 1MB Max
        ]);
        dd($this);
    }

}
