<?php

namespace Database\Factories;

use App\Models\TelegramBot;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TelegramBot>
 */
class TelegramBotFactory extends Factory
{
    protected $model = TelegramBot::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'token' => '5933987272:AAEn1IIt3JIgXIXlaHJM-a7tA3E7FOd6_Zc',
            'chat_id' => '-1001730451030',
        ];
    }
}
