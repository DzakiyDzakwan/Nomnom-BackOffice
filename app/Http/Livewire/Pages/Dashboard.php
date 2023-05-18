<?php

namespace App\Http\Livewire\Pages;

use App\Models\Bahan;
use App\Models\Kategori;
use App\Models\Peralatan;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $user = User::count();
        $kategori = Kategori::count();
        $bahan = Bahan::count();
        $alat = Peralatan::count();

        return view('livewire.pages.dashboard', compact('user', 'kategori', 'bahan', 'alat'))->layout('master.layout', ['page'=>'dashboard', 'title' => 'Dashboard']);
    }
}
