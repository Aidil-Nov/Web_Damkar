<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContactMessage;
use Faker\Factory as Faker;

class ContactMessageSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $i) {
            ContactMessage::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'message' => $faker->sentence(12),
            ]);
        }
    }
}
