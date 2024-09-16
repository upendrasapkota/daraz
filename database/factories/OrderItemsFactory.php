<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\OrderItems;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class OrderItemsFactory extends Factory
{
    protected $model = OrderItems::class;

    public function definition(): array
    {
        return [
            'quantity' => $this->faker->randomNumber(),
            'price' => $this->faker->randomFloat(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'order_id' => Order::factory(),
        ];
    }
}
