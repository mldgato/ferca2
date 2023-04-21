<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'invoice' => $this->faker->unique()->numberBetween(51111111, 99999999),
            'total' => $this->faker->decimal(6,2),
            'date' => $this->faker->date(),
            'customer_id' => Customer::all()->random()->id,
            'user_id' => User::all()->random()->id
        ];
    }
}