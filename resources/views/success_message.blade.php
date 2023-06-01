@extends('layouts.main-layout', ['title' => env('APP_NAME') . ' - Заявка отправлена'])

@section('content')
    <div class="some-place2"></div>
    <div class="simple_container">

        <h1>Ваша заявка поступила в обработку.</h1>

        <div class="back_link">
            <a href="{{ route('index') }}"><i class="fas fa-arrow-circle-left"></i> Вернуться на главную страницу</a>
        </div>



        <div class="back_link"><a href="{{ route('index') }}"><svg xmlns="http://www.w3.org/2000/svg" fill="#6C47209E" width="25" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"/></svg></a></div>
    </div>
@endsection
