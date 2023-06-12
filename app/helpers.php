<?php

use App\Models\TelegramBot;
use GuzzleHttp\Client;
use Illuminate\Support\Carbon;

function birthdayFilter($date): string
{
    $date = Carbon::parse($date->age);
    $days = $date->diffInDays();

    return (string)round($days / 365, 2);
}

function favorite_connectionFilter($favorite_connection): string
{
    return match ($favorite_connection) {
        1 => '<i class="fas fa-phone"></i>',
        2 => '<i class="far fa-envelope"></i>',
        3 => '<i class="fab fa-whatsapp"></i>',
        4 => '<i class="fab fa-telegram-plane"></i>',
        default => '',
    };
}

function phoneFilter($phone_number): array|string|int
{
    $clear_number = str_replace([' ', '-', '(', ')', '+'], '', $phone_number);

    return match (strlen($clear_number)) {
        10 => '7' . $clear_number,
        default => $clear_number,
    };

}

function clearPhone($number)
{
    return str_replace([' ', '+', '-', '(', ')'], '', $number);
}

function sendMessage($message)
{
    $client = new Client(['base_uri' => 'https://api.telegram.org']);
    $telegram_bot = TelegramBot::all()->first();
    return $client->request('GET', '/bot' . $telegram_bot->token . '/sendMessage?chat_id=' . $telegram_bot->chat_id . '&text=' . $message . '&parse_mode=Markdown&disable_web_page_preview=True');
}

