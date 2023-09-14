<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        //call every seeder class
        $this->call([
            UserSeeder::class,
            NewsCategorySeeder::class,
            CategorySeeder::class,
            PackageSeeder::class,
            TestimonialSeeder::class,
            NewsSeeder::class,
            
        ]);

    }
}
