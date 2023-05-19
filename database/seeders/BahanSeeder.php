<?php

namespace Database\Seeders;

use App\Models\Bahan;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bahan::create([
            'id' => 'B001',
            'nama_bahan' => 'Ayam Potong',
            'harga' => '40000 / kilogram',
            'image' => '1684496584.jpg'
        ]);

        Bahan::create([
            'id' => 'B002',
            'nama_bahan' => 'Daging Sapi',
            'harga' => '80000 / ons',
            'image' => '1684496585.jpg'
        ]);

        Bahan::create([
            'id' => 'B003',
            'nama_bahan' => 'Telur',
            'harga' => '1500 / butir',
            'image' => '1684496586.jpg'
        ]);
    }
}
