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
            'name' => 'Msr Nayeem',
            'email' => 'msr@example.com',
            'password' => bcrypt('12345678'),

        ]);
        \App\Models\User::factory()->create([
            'name' => 'Shahidur',
            'email' => 'shahidur@example.com',
            'password' => bcrypt('12345678'),

        ]);
    }
}
