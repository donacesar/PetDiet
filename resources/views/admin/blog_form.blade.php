@extends('layouts.admin', ['title' => env('APP_NAME') . ' - Новый пост'])

@section('header')
    Новый Пост
@endsection

@section('content')

    <div class="card card-body">
        <form action="{{ route('post.create') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Название поста, заголовок</label>
                <input class="form-control" type="text" id="title" name="title" placeholder="Название поста..." required>
            </div>

            <div class="form-group">
                <label class="form-file-label" for="image">
                    <span class="form-file-text">Выбрать картинку</span>
                </label>
                <input class="form-file-input" type="file" id="image" name="image" accept="image/png, image/jpeg" required>
            </div>


            <div class="form-group">
                <label for="description">Краткое описание</label>
                <input class="form-control" type="text" id="description" name="description" placeholder="Краткое описание..." required>
            </div>

            <div class="form-group">
                <label for="content">Основной текст</label>
                <textarea  class="form-control" name="content" id="content" cols="30" rows=7 required></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Создать</button>
            </div>


        </form>
    </div>

@endsection
