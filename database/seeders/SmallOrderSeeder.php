<?php

namespace Database\Seeders;

use App\Models\SmallOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PHPUnit\Framework\TestSize\Small;

class SmallOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SmallOrder::factory(10)->create();
    }
}
