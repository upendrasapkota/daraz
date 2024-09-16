<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_items')->insert([
            [
                'order_id' => 2, // Replace with the actual order ID
                'product_id' => 3, // Add product name
                'quantity' => 2,
                'price' => 19.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 2, // Replace with the actual order ID
                'product_id' => 4, // Add product name
                'quantity' => 5,
                'price' => 9.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 3, // Replace with the actual order ID
                'product_id' => 1, // Add product name
                'quantity' => 5,
                'price' => 9.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 4, // Replace with the actual order ID
                'product_id' => 2, // Add product name
                'quantity' => 5,
                'price' => 9.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
