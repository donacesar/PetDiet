<?php

namespace Database\Seeders;

use App\Models\ConditionIndex;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConditionIndexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ConditionIndex::factory()->create([
            'category' => 'Крайнее истощение',
            'category_id' => 1
        ]);
        ConditionIndex::factory()->create([
            'category' => 'Истощение',
            'category_id' => 2
        ]);
        ConditionIndex::factory()->create([
            'category' => 'Недостаточный вес',
            'category_id' => 3
        ]);
        ConditionIndex::factory()->create([
            'category' => 'Слегка недостаточный вес',
            'category_id' => 4
        ]);
        ConditionIndex::factory()->create([
            'category' => 'Норма',
            'category_id' => 5
        ]);
        ConditionIndex::factory()->create([
            'category' => 'Слегка избыточный вес',
            'category_id' => 6
        ]);
        ConditionIndex::factory()->create([
            'category' => 'Избыточный вес',
            'category_id' => 7
        ]);
        ConditionIndex::factory()->create([
            'category' => 'Ожирение',
            'category_id' => 8
        ]);
        ConditionIndex::factory()->create([
            'category' => 'Крайнее ожирение',
            'category_id' => 9
        ]);
    }
}
