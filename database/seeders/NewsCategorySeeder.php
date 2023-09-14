<?php

namespace Database\Seeders;

use App\Models\NewsCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create 3 news categories

        NewsCategory::create([
            'name' => 'Hajj',
        ]);
        NewsCategory::create([
            'name' => 'Umrah',
        ]);
        NewsCategory::create([
            'name' => 'Ramadan',
        ]);
        NewsCategory::create([
            'name' => 'Eid',
        ]);
        NewsCategory::create([
            'name' => 'Zakat',
        ]);


    }
}
