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
            'news_category_id' => 1, //hajj
            'slug' => 'hajj-news-1',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image_link' => 'hajj-news-1.jpg',
        ]);
        News::create([
            'user_id' => 1,
            'title' => 'Hajj News 2',
            'news_category_id' => 1, //hajj
            'slug' => 'hajj-news-2',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image_link' => 'hajj-news-2.jpg',
        ]);

        //umrah news
        News::create([
            'user_id' => 1,
            'title' => 'Umrah News 1',
            'news_category_id' => 2, //umrah
            'slug' => 'umrah-news-1',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image_link' => 'umrah-news-1.jpg',
        ]);
        News::create([
            'user_id' => 1,
            'title' => 'Umrah News 2',
            'news_category_id' => 2, //umrah
            'slug' => 'umrah-news-2',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image_link' => 'umrah-news-2.jpg',
        ]);
    }
}
