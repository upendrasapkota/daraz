<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'title' => 'Novel',
                'description' => 'A best-selling novel',
                'image' => 'novel.jpg',
                'price' => '19.99',
                'category_id' => 1,
                'quantity' => '100',
            ],
            [
                'title' => 'business',
                'description' => 'A best-selling business',
                'image' => 'business.jpg',
                'price' => '19.99',
                'category_id' => 2,
                'quantity' => '100',
            ],
            [
                'title' => 'cooker',
                'description' => 'A best-selling cooker',
                'image' => 'cooker.jpg',
                'price' => '19.99',
                'category' => 3,
                'quantity' => '100',
            ],
            [
                'title' => 'okk',
                'description' => 'A best-kndfj business',
                'image' => 'business.jpg',
                'price' => '983.99',
                'category_id' => 4,
                'quantity' => '100',
            ],
            [
                'title' => 'yooo yoo',
                'description' => 'A best-selling yo-yo',
                'image' => 'business.jpg',
                'price' => '19.99',
                'category_id' => 4,
                'quantity' => '100',
            ],
        ]);
    }
}
