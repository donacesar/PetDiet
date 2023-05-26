<?php

namespace Database\Seeders;

use App\Models\FavoriteConnection;
use Illuminate\Database\Seeder;

class FavoriteConnectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FavoriteConnection::factory()->create([
            'category' => 'телефон',
            'category_id' => 1
        ]);
        FavoriteConnection::factory()->create([
            'category' => 'email',
            'category_id' => 2
        ]);
        FavoriteConnection::factory()->create([
            'category' => 'whatsapp',
            'category_id' => 3
        ]);
        FavoriteConnection::factory()->create([
            'category' => 'telegram',
            'category_id' => 4
        ]);
    }
}
