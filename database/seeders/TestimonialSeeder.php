<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //hajj review
        Testimonial::create([
            'user_id' => 1,
            'category_id' => 1, //hajj
            'package_id' => 1,
            'comment' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'rating' => 5,
        ]);
        Testimonial::create([
            'user_id' => 2,
            'category_id' => 1, //hajj
            'package_id' => 1,
            'comment' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'rating' => 5,
        ]);

        //umrah review
        Testimonial::create([
            'user_id' => 1,
            'category_id' => 2, //umrah
            'package_id' => 4,
            'comment' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'rating' => 5,
        ]);
        Testimonial::create([
            'user_id' => 2,
            'category_id' => 2, //umrah
            'package_id' => 4,
            'comment' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'rating' => 5,
        ]);

    }
}
