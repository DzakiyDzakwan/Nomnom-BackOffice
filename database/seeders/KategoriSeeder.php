<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create([
                'id' => 'C001',
                'nama_kategori' => 'Breakfast',
                'sub_kategori_id' => 'SC001',
                'image' => '1684496579.jpg'
        ]);

        Kategori::create([
            'id' => 'C002',
            'nama_kategori' => 'Lunch',
            'sub_kategori_id' => 'SC001',
            'image' => '1684496580.jpg'
        ]);

        Kategori::create([
            'id' => 'C003',
            'nama_kategori' => 'Dinner',
            'sub_kategori_id' => 'SC001',
            'image' => '1684496581.jpg'
        ]);

        Kategori::create([
            'id' => 'C004',
            'nama_kategori' => 'Asian',
            'sub_kategori_id' => 'SC002',
            'image' => '1684496582.jpg'
        ]);

        Kategori::create([
            'id' => 'C005',
            'nama_kategori' => 'Western',
            'sub_kategori_id' => 'SC002',
            'image' => '1684496583.jpg'
        ]);
    }
}
