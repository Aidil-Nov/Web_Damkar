<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Baru',
            'email' => 'admin@damkar.local',
            'password' => bcrypt('rahasia123'),
            'is_admin' => 1,
        ]);
    }
}
