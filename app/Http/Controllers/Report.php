<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\SubKategori;
use App\Models\Bahan;
use App\Models\Peralatan;
use PDF;

class Report extends Controller
{
    public function exportCategory()
    {
        $kategori = Kategori::all();

        $pdf = PDF::loadView('livewire.pages.report-category', array('kategori' => $kategori))
        ->setPaper('a4', 'potrait');
        return $pdf->stream();
    }

    public function exportSubCategory()
    {
        $sub = SubKategori::all();

        $pdf = PDF::loadView('livewire.pages.report-sub-category', array('sub' => $sub))
        ->setPaper('a4', 'potrait');
        return $pdf->stream();
    }

    public function exportIngredient()
    {
        $bahan = Bahan::all();

        $pdf = PDF::loadView('livewire.pages.report-ingredient', array('bahan' => $bahan))
        ->setPaper('a4', 'potrait');
        return $pdf->stream();
    }

    public function exportUtensill()
    {
        $peralatan = Peralatan::all();

        $pdf = PDF::loadView('livewire.pages.report-utensill', array('peralatan' => $peralatan))
        ->setPaper('a4', 'potrait');
        return $pdf->stream();
    }
}
