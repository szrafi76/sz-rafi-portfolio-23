<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'title' => 'Iqoo HeatStick Bronze',
                'client' => 'Iqoo HeatStick Bronze',
                'description' => 'Experience the smooth and rich flavor of Iqoo HeatStick Bronze. Designed for a superior vaping experience.',
                'banner' => '1.jpg',
                'category' => 1, 
                'completion_date' => now(), 
                'order' => 1,
            ],
           
        ];

        // Insert the products into the database
        Project::insert($projects);
    }
}
