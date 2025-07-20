<?php

namespace Database\Seeders;

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
            'name'     => 'Admin Damkar',
            'email'    => 'admin@damkar.local',
            'password' => Hash::make('rahasia123'),
            'is_admin' => true,
        ]);
    }
}
