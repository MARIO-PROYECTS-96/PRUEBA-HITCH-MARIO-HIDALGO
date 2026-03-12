<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'description' => $this->faker->sentence(3),
            'price'       => $this->faker->numberBetween(1000, 1000000),
        ];
    }
}
