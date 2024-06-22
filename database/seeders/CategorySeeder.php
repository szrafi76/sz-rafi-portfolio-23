<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['title' => 'UI/UX Designer', 'status' => '1', 'order' => '1'],
            ['title' => 'Graphics', 'status' => '1', 'order' => '2'],
            ['title' => 'Video Editing', 'status' => '1', 'order' => '3'],
        ];

        Category::insert($categories);
    }
}
