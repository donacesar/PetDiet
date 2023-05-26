<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::factory()->create([
            'category' => 'консультация',
            'category_id' => 1
        ]);
        Service::factory()->create([
            'category' => 'поддержка',
            'category_id' => 2
        ]);
        Service::factory()->create([
            'category' => 'подбор натурального рациона',
            'category_id' => 3
        ]);
        Service::factory()->create([
            'category' => 'подбор промышленного корма',
            'category_id' => 4
        ]);
        Service::factory()->create([
            'category' => 'анализ текущего рациона',
            'category_id' => 5
        ]);
    }
}
