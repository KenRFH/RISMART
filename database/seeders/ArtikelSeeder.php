<?php

namespace Database\Seeders;

use App\Models\VrImage;
use Illuminate\Container\Attributes\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VrImage::create([
            'judul' => 'Agritourism A',
            'text' => 'fox jumps over the lazy dog',
            'gambar' => 'example360.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        VrImage::create([
            'judul' => 'Agritourism B',
            'text' => 'fox jumps over the lazy dog fox jumps over the lazy dog',
            'gambar' => 'example360.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
