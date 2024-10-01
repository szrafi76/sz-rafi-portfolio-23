<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $portfolios = [
            [
                'title' => 'Global Evolution',
                'subTitle' => 'Revolutionizing Global Trade',
                'client' => 'Akij Venture Ltd',
                'description' => 'Experience the innovation and forward-thinking strategies that drive global trade in this groundbreaking project.',
                'category_id' => '1',
                'completion_date' => now(),
                'banner' => 'global_evolution_banner.jpg',
                'gallery' => json_encode(['global_evolution_1.jpg', 'global_evolution_2.jpg', 'global_evolution_3.jpg']),
                'figma_link' => 'https://figma.com/global-evolution',
                'live_link' => 'https://globalevolution.com',
                'order' => 1,
                'status' => 1,
            ],
            [
                'title' => 'Urban Greenery',
                'subTitle' => 'Sustainable Urban Development',
                'client' => 'Green City Corp',
                'description' => 'A visionary project that brings nature back to the urban environment, enhancing both beauty and sustainability.',
                'category_id' => '2',
                'completion_date' => now(),
                'banner' => 'urban_greenery_banner.jpg',
                'gallery' => json_encode(['urban_greenery_1.jpg', 'urban_greenery_2.jpg']),
                'figma_link' => 'https://figma.com/urban-greenery',
                'live_link' => 'https://urbangreenery.com',
                'order' => 2,
                'status' => 1,
            ],
            [
                'title' => 'Digital Transformation',
                'subTitle' => 'Empowering Businesses Through Technology',
                'client' => 'Tech Innovators Ltd',
                'description' => 'Transforming traditional business models into digital-first powerhouses, enabling growth and innovation.',
                'category_id' => '3',
                'completion_date' => now(),
                'banner' => 'digital_transformation_banner.jpg',
                'gallery' => json_encode(['digital_transformation_1.jpg', 'digital_transformation_2.jpg', 'digital_transformation_3.jpg', 'digital_transformation_4.jpg']),
                'figma_link' => 'https://figma.com/digital-transformation',
                'live_link' => 'https://digitaltransformation.com',
                'order' => 3,
                'status' => 1,
            ],
        ];
        Portfolio::insert($portfolios);
    }
}