<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create manual news

        //hajj news
        News::create([
            'user_id' => 1,
            'title' => 'Hajj News 1',
            'category_id' => 1,
            'news_category_id' => 1, //hajj
            'slug' => 'hajj-news-1',
            'is_featured' => true,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image_link' => 'images/landing-private-airlines-7-570x415.jpg',
        ]);
        News::create([
            'user_id' => 1,
            'title' => 'Hajj News 2',
            'category_id' => 1,
            'news_category_id' => 1, //hajj
            'slug' => 'hajj-news-2',
            'is_featured' => true,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image_link' => 'images/landing-private-airlines-7-570x415.jpg',
        ]);

        //umrah news
        News::create([
            'user_id' => 1,
            'title' => 'Umrah News 1',
            'category_id' => 2, //umrah
            'news_category_id' => 2, //umrah
            'slug' => 'umrah-news-1',
            'is_featured' => true,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image_link' => 'images/landing-private-airlines-7-570x415.jpg',
        ]);
        News::create([
            'user_id' => 1,
            'title' => 'Umrah News 2',
            'category_id' => 2, //umrah
            'news_category_id' => 2, //umrah
            'slug' => 'umrah-news-2',
            'is_featured' => true,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image_link' => 'images/landing-private-airlines-7-570x415.jpg',
        ]);
    }
}
