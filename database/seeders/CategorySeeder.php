<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create 3 manual category
        Category::create([
            'name' => 'Hajj',
        ]);
        Category::create([
            'name' => 'Umrah',
        ]);
        Category::create([
            'name' => 'Travel',
        ]);

    }
}
