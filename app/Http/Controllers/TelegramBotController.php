<?php

namespace App\Http\Controllers;

use App\Models\TelegramBot;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class TelegramBotController extends Controller
{
    public function index()
    {
        $telegram_bot = TelegramBot::all()->first();

        return view('telegram_bot', compact('telegram_bot'));
    }

    public function update(Request $token)
    {
        $client = new Client(['base_uri' => 'https://api.telegram.org']);

        $res = $client->request('GET', '/bot' . $token->token . '/getUpdates?offset=-1');

        if(!isset(json_decode($res->getbody())->result[0]->message->chat->id)){
            dd('Что-то пошло не так.');
        }
        $chat_id = json_decode($res->getbody())->result[0]->message->chat->id;

        TelegramBot::all()->find(1)->update([
            'token' => $token->token,
            'chat_id' => $chat_id
        ]);

        return redirect()->route('bot_success_message');
    }

    static public function sendMessage(Request $request)
    {
        $message = $request->message;
        $client = new Client(['base_uri' => 'https://api.telegram.org']);
        $telegram_bot = TelegramBot::all()->first();
        $res = $client->request('GET', '/bot' . $telegram_bot->token . '/sendMessage?chat_id=' . $telegram_bot->chat_id . '&text='. $message );
        return redirect()->back();
    }

}
