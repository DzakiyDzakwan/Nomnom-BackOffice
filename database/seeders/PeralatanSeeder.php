<?php

namespace Database\Seeders;

use App\Models\Peralatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeralatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Peralatan::create([
            'id' => 'P001',
            'nama_peralatan' => 'Panci',
            'bahan' => 'Alumunium',
            'image' => '1684496587.jpg'
        ]);

        Peralatan::create([
            'id' => 'P002',
            'nama_peralatan' => 'Pisau Dapur',
            'bahan' => 'Besi',
            'image' => '1684496588.jpg'
        ]);

        Peralatan::create([
            'id' => 'P003',
            'nama_peralatan' => 'Sendok Makan',
            'bahan' => 'Besi',
            'image' => '1684496589.jpg'
        ]);

        Peralatan::create([
            'id' => 'P004',
            'nama_peralatan' => 'Garpu Makan',
            'bahan' => 'Besi',
            'image' => '1684496590.jpg'
        ]);

        Peralatan::create([
            'id' => 'P005',
            'nama_peralatan' => 'Sutil Kayu',
            'bahan' => 'Kayu',
            'image' => '1684496591.jpg'
        ]);
    }
}
