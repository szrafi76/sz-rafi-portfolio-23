<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heros')->insert([
            [
                'author' => 'SZ Rafi',
                'title' => '',
                'content' => 'I\'m a UI/UX designer based in Bangladesh, and I\'m very passionate and dedicated to my work.',
                'banner' => 'avatar.png',
                'expertise_area' => json_encode(['UI/UX Designer', 'Video Editor', 'Content Creator', 'Frontend Developer']),
                'order' => 1,
                'status' => 1,
            ],
           
        ]);
    }
}
