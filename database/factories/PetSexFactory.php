<?php

namespace Database\Factories;

use App\Models\PetSex;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PetSex>
 */
class PetSexFactory extends Factory
{
    protected $model = PetSex::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category' => '',
            'category_id' => null
        ];
    }
}
