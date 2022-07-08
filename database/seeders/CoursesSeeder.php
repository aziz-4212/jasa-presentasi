<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Courses;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                'category_id' => 1, 
                'slug' => 'cours-1', 
                'title' => 'Cours 1', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 
                'price' => 200000,
                'strike_price' => 100000,
                'thumbnail' => 'thumbnail/image1.jpg',
                'publish' => 'publish',
                'meta_title' => 'cours 1',
                'meta_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'meta_keyword' => 'cours 1',
            ],

            [
                'category_id' => 2, 
                'slug' => 'cours-2', 
                'title' => 'Cours 2', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 
                'price' => 300000,
                'strike_price' => 200000,
                'thumbnail' => 'thumbnail/image2.jpg',
                'publish' => 'publish',
                'meta_title' => 'cours 2',
                'meta_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'meta_keyword' => 'cours 2',
            ],
            [
                'category_id' => 3, 
                'slug' => 'cours-3', 
                'title' => 'Cours 3', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 
                'price' => 400000,
                'strike_price' => 300000,
                'thumbnail' => 'thumbnail/image3.jpg',
                'publish' => 'publish',
                'meta_title' => 'cours 3',
                'meta_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'meta_keyword' => 'cours 3',
            ],
        ];
        foreach ($courses as $item) {
            Courses::create($item);
        }
    }
}
