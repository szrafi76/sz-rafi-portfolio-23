<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
            'website_name' => 'SZ Rafi',
            'website_slogan' => 'UI/UX Designer',
            'website_logo' => 'logo.png', // Updated logo file name
            'website_favicon' => 'logo.png', // Updated favicon file name
            'website_description' => '',
            'website_email' => 'szrafi76@gmail.com', // Updated email
            'website_phone' => '+880 171 573 3452',
            'whatsapp_number' => '',
            'behance' => 'https://www.facebook.com',
            'facebook_page' => 'https://www.facebook.com',
            'instagram_page' => 'https://www.instagram.com',
            'office_address' => 'Dhaka, Bangladesh',
            'about_content' => 'Hello there! I\'m a UI/UX designer, and I\'m very passionate and dedicated to my work. With 2 years of experience as a professional UI/UX designer, I have acquired the skills and knowledge necessary to make your project a success. I enjoy every step of the design process, from discussion to collaboration.',
            'about_image' => 'about.jpg',
            'experience_year'=> '2',
            'total_project'=> '20',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
