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
            'judul' => 'Test Tempat A',
            'deskripsi' => '<p>Test</p></p><p>test lagi</p>',
            'gambar' => 'assets/vr_images/example360.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        VrImage::create([
            'judul' => 'Test Tempat B',
            'deskripsi' => 'fox jumps over the lazy dog fox jumps over the lazy dog',
            'gambar' => 'assets/vr_images/example360.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
