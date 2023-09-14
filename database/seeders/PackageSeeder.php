<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create manual package

        //Hajj
        Package::create([
            'name' => 'Basic',
            'category_id' => 1,
            'room_type_mecca' => '3*',
            'room_type_medina' => '3*',
            'distance_mecca' => '1000',
            'distance_medina' => '1000',
            'day' => 40,
            'price' => 500000,
            'description' => 'Hajj 2024',
            'image_link' => 'hajj.jpg',
        ]);
        Package::create([
            'name' => 'Standard',
            'category_id' => 1,
            'room_type_mecca' => '4*',
            'room_type_medina' => '4*',
            'distance_mecca' => '500',
            'distance_medina' => '500',
            'day' => 40,
            'price' => 600000,
            'description' => 'Hajj 2024',
            'image_link' => 'hajj.jpg',
        ]);
        Package::create([
            'name' => 'Premium',
            'category_id' => 1,
            'room_type_mecca' => '5*',
            'room_type_medina' => '5*',
            'distance_mecca' => '100',
            'distance_medina' => '100',
            'day' => 40,
            'price' => 700000,
            'description' => 'Hajj 2024',
            'image_link' => 'hajj.jpg',
        ]);


        //package for umrah
        Package::create([
            'name' => 'Basic',
            'category_id' => 2,
            'room_type_mecca' => '3*',
            'room_type_medina' => '3*',
            'distance_mecca' => '1000',
            'distance_medina' => '1000',
            'day' => 10,
            'price' => 140000,
            'description' => 'Umrah 2024',
            'image_link' => 'hajj.jpg',
        ]);
        Package::create([
            'name' => 'Standard',
            'category_id' => 2,
            'room_type_mecca' => '4*',
            'room_type_medina' => '4*',
            'distance_mecca' => '500',
            'distance_medina' => '500',
            'day' => 10,
            'price' => 150000,
            'description' => 'Umrah 2024',
            'image_link' => 'hajj.jpg',
        ]);
        Package::create([
            'name' => 'Premium',
            'category_id' => 2,
            'room_type_mecca' => '5*',
            'room_type_medina' => '5*',
            'distance_mecca' => '100',
            'distance_medina' => '100',
            'day' => 10,
            'price' => 160000,
            'description' => 'Umrah 2024',
            'image_link' => 'hajj.jpg',
        ]);
    }
}
