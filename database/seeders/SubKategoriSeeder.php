<?php

namespace Database\Seeders;

use App\Models\SubKategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubKategori::create([
            'id' => 'SC001',
            'nama_sub_kategori' => 'Meals'
        ]);

        SubKategori::create([
            'id' => 'SC002',
            'nama_sub_kategori' => 'Cuisine'
        ]);

        SubKategori::create([
            'id' => 'SC003',
            'nama_sub_kategori' => 'Ocassion'
        ]);
    }
}
