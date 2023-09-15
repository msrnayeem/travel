<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'User 1',
            'email' => 'user1@travelworld.com',
            'password' => bcrypt('12345678'),

        ]);
        \App\Models\User::factory()->create([
            'name' => 'User 2',
            'email' => 'user2@travelworld.com',
            'password' => bcrypt('12345678'),

        ]);
    }
}
