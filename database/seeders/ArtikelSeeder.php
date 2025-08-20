<?php

namespace Database\Seeders;

use App\Models\Artikel;
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
        Artikel::create([
            'judul' => 'Agritourism A',
            'text' => 'fox jumps over the lazy dog',
            'gambar' => 'https://momento360.com/e/u/ccbff908513d4b49af3f9e5669a3481d?utm_campaign=embed&utm_source=other&heading=-2.96&pitch=-16.93&field-of-view=66.6&size=medium&display-plan=true',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Artikel::create([
            'judul' => 'Agritourism B',
            'text' => 'fox jumps over the lazy dog fox jumps over the lazy dog',
            'gambar' => 'https://momento360.com/e/u/ccbff908513d4b49af3f9e5669a3481d?utm_campaign=embed&utm_source=other&heading=-2.96&pitch=-16.93&field-of-view=66.6&size=medium&display-plan=true',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Artikel::create([
            'judul' => 'Agritourism C',
            'text' => 'fox jumps over the lazy dog fox jumps over the lazy dog fox jumps over the lazy dog',
            'gambar' => 'https://momento360.com/e/u/ccbff908513d4b49af3f9e5669a3481d?utm_campaign=embed&utm_source=other&heading=-2.96&pitch=-16.93&field-of-view=66.6&size=medium&display-plan=true',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
