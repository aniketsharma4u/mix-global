<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Product::create([
            'product_name' => 'iPhone AirPods Pro',
            'product_description' => 'Wireless Microphone with the new style, shockproof, clear voice reception that suitable for recording, online meeting, vlogging, and calling. Free casing with high-quality zipper.',
            'amount' => '28.00',
            'slug' => 'iphone-airpods-pro',
            'total_stock' => '2000',
            'product_unique_id' => '131231112'//mt_rand(50, time())
        ]);

        \App\Models\ProductImages::create([
            'product_unique_id' => '131231112',
            'image_name' => 'MME73.jpg',
            'image_path' => '/public/images/MME73.jpg',
            'image_size' => '82944',
            'image_type' => 'jpg'
        ]);


    }
}
