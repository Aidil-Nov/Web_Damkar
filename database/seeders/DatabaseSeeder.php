<?php

namespace Database\Seeders;

use Database\Seeders\AdminUserSeeder;
use Database\Seeders\ContactMessageSeeder;
use Database\Seeders\GallerySeeder;
use Database\Seeders\NewsSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\VisitorStatisticSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ContactMessageSeeder::class,
            VisitorStatisticSeeder::class,
            GallerySeeder::class,
            NewsSeeder::class,
            UserSeeder::class,
            AdminUserSeeder::class,
        ]);
    }
}
