<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use Faker\Factory as Faker;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $i) {
            News::create([
                'title' => $faker->sentence(6),
                'content' => $faker->paragraph(4),
                'author' => $faker->name,
                'published_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'status' => $faker->boolean(90), // 90% aktif
            ]);
        }
    }
}
