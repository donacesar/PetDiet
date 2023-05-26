<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\FavoriteConnection;
use App\Models\PetSex;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(1)->create();

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


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
