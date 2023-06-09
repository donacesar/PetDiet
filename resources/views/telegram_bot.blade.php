@extends('layouts.admin', ['title' => env('APP_NAME') . ' - Настройка Телеграм Бота'])

@section('header')
    Настройка Телеграм Бота - Оповещения
@endsection

@section('content')

    <div>
        <p>1) В  диалоге с ботом <span class="focus-style">@petdiet_bot</span> или в группе, куда добавлен бот, пишем: <span class="code-style">/join</span></p>
        <p>2) В телеге забиваем в поиск <span class="code-style">@BotFather</span> (или https://t.me/BotFather на компе),
            запускаем</p>
        <p>3) Пишем в диалоге с <span class="focus-style">@BotFather</span> команду: <span class="code-style">/mybots</span></p>
        <p>4) Кликаем на <span class="focus-style">@petdiet_bot</span></p>
        <p>5) Кликаем на <span class="focus-style">API Token</span></p>
        <p>6) Копируем абракадабру вставляем сюда <i class="fas fa-arrow-down"></i></p>
    </div>
    <form action="{{ route('telegram_bot.update') }}" method="post">
        @csrf
        @method('patch')
        <div class="card card-dark" style="max-width: 500px;">
            <div class="card-header">
                <h3 class="card-title">API Token  <i class="fas fa-arrow-down"></i></h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <input type="text" name="token" class="form-control code-style" placeholder="API Token..."
                               value="{{ $telegram_bot->token }}">
                    </div>

                </div>
                <button type="submit" class="btn btn-dark mt-3">Отправить</button>

            </div>
            <!-- /.card-body -->
        </div>

    </form>
    <hr>
    <form action="{{ route('send_message') }}" method="post">
        @csrf
        <div class="card card-info" style="max-width: 500px;">
            <div class="card-header">
                <h3 class="card-title">Отправить тестовое сообщение</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <input type="text" name="message" class="form-control" placeholder="Тестовое сообщение..." required>
                    </div>
                </div>
                <button type="submit" class="btn btn-info mt-3">Послать</button>

            </div>
            <!-- /.card-body -->
        </div>

    </form>
    {{--        {{Http::get('https://api.telegram.org/bot5933987272:AAEn1IIt3JIgXIXlaHJM-a7tA3E7FOd6_Zc/getUpdates?offset=-1'); }}--}}




@endsection
