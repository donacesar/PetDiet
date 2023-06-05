<?php

namespace Database\Factories;

use App\Models\SmallOrder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SmallOrderFactory extends Factory
{
    protected $model = SmallOrder::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->firstName,
            'phone' => fake()->phoneNumber,
            'email' => fake()->email,
            'favorite_connection' => rand(1,4),
            'service' => rand(1,4),
            'finished' => rand(0,1)
        ];
    }
}
