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
         $this->call([
             UserSeeder::class,
             FavoriteConnectionSeeder::class,
             PetSexSeeder::class,
             ServiceSeeder::class,
             SmallOrderSeeder::class
         ]);


    }
}
