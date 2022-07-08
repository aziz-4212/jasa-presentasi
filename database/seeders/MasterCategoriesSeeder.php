<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MasterCategories;

class MasterCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $master_categories = [
            ['slug' => 'category 1', 'name' => 'category 1', 'publish' => 'publish',],
            ['slug' => 'category 2', 'name' => 'category 2', 'publish' => 'publish',],
            ['slug' => 'category 3', 'name' => 'category 3', 'publish' => 'publish',],
        ];
        foreach ($master_categories as $item) {
            MasterCategories::create($item);
        }
    }
}
