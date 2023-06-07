<?php

namespace Database\Factories;

use App\Models\FullOrder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FullOrder>
 */
class FullOrderFactory extends Factory
{

    protected $model = FullOrder::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'phone' => fake()->phoneNumber,
            'email' => fake()->email,
            'favorite_phone' => rand(0, 1),
            'favorite_email' => rand(0, 2),
            'favorite_whatsapp' => rand(0, 1),
            'favorite_telegram' => rand(0, 1),
            'pet_name' => fake()->firstName,
            'age' => fake()->date('d-m-Y'),
            'pet_sex' => rand(1, 8),
            'breed' => fake()->word,
            'weight' => rand(2,45) . 'кг',
            'condition_index' => rand(1, 9),
            'activity' => rand(1, 3),
            'location_condition' => ['квартира', 'загородный дом', 'вольер'][rand(0, 2)],
            'pet_shit' => fake()->words(3, true),
            'food_before' => fake()->words(5, true),
            'food_with_you' => fake()->words(5, true),
            'favorite_food' => fake()->words(5, true),
            'intolerance' => fake()->words(5, true),
            'meat_fish_egg' => fake()->text(50),
            'milk' => fake()->text(50),
            'cereals_potato_pasta' => fake()->text(50),
            'vegetables_fruits' => fake()->text(50),
            'oils_fats' => fake()->text(30),
            'treats_snacks_bones' => fake()->text(20),
            'finished' => rand(0, 1),
        ];
    }
}
