<?php

namespace Database\Seeders;

use App\Models\PetSex;
use Illuminate\Database\Seeder;

class PetSexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PetSex::factory()->create([
            'category' => 'кобель(не кастрирован)',
            'category_id' => 1
        ]);
        PetSex::factory()->create([
            'category' => 'кобель(кастрирован)',
            'category_id' => 2
        ]);
        PetSex::factory()->create([
            'category' => 'собака(не стерилизована)',
            'category_id' => 3
        ]);
        PetSex::factory()->create([
            'category' => 'собака(стерилизована)',
            'category_id' => 4
        ]);
        PetSex::factory()->create([
            'category' => 'кот(не кастрирован)',
            'category_id' => 5
        ]);
        PetSex::factory()->create([
            'category' => 'кот(кастрирован)',
            'category_id' => 6
        ]);
        PetSex::factory()->create([
            'category' => 'кошка(не стерилизована)',
            'category_id' => 7
        ]);
        PetSex::factory()->create([
            'category' => 'кошка(стерилизована)',
            'category_id' => 8
        ]);
    }
}
