<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $quantity = $this->faker->numberBetween(1, 10);

        return [
            'quantity' => $quantity,
            'discount' => $this->faker->numberBetween(1, 30),
            'total_price' => ($quantity * $this->faker->numberBetween(1, 200)),
            'product_id' => $this->faker->numberBetween(1, 50),
        ];
    }
}
