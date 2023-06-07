<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Activity::factory()->create([
            'category' => 'До 2 часов в день',
            'category_id' => 1
        ]);
        Activity::factory()->create([
            'category' => '2 - 4 часа в день',
            'category_id' => 2
        ]);
        Activity::factory()->create([
            'category' => 'От 4 часов в день',
            'category_id' => 3
        ]);
    }
}
