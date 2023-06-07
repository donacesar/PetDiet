<?php

namespace Database\Seeders;

use App\Models\FullOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FullOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FullOrder::factory(25)->create();
    }
}
