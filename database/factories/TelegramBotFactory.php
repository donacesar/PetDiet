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
            'token' => '',
            'chat_id' => '',
        ];
    }
}
