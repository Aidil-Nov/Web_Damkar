<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;
use Faker\Factory as Faker;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $i) {
            Gallery::create([
                'judul' => 'gallery ' . $i,
                'gambar' => 'gallery_' . $i . '.jpg',
                'deskripsi' => $faker->sentence(10),
            ]);
        }
    }
}
