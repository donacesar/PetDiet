<?php

namespace Database\Factories;

use App\Models\ConditionIndex;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ConditionIndex>
 */
class ConditionIndexFactory extends Factory
{
    protected $model = ConditionIndex::class;

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
