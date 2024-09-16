<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Electronics',
            'Books',
            'Clothing',
            'stationary',
            'foods',
        ];

        foreach ($categories as $category_name) {
            $category = new Category();
            $category->category_name = $category_name;
            $category->save();
        }
    }
}
