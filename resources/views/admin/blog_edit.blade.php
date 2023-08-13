@extends('layouts.admin', ['title' => env('APP_NAME') . ' - Пост №' . $post->id])

@section('header')
    Пост #{{ $post->id }}
@endsection

@section('content')

    <div class="card card-body">
        <form action="{{ route('post.update', $post) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="title">Название поста, заголовок</label>
                <input class="form-control" type="text" id="title" name="title" placeholder="Название поста..."
                       value="{{ $post->title }}" required>
            </div>

            <div class="post-edit">
                <img src="{{ asset('/storage/' . $post->image_url) }}" class="" alt="картинка поста">
            </div>

            <div class="form-group">
                <label class="form-file-label" for="image">
                    <span class="form-file-text">Выбрать картинку</span>
                </label>
                <input class="form-file-input" type="file" id="image" name="image" accept="image/png, image/jpeg">
            </div>

            <div class="form-group">
                <label for="description">Краткое описание</label>
                <input class="form-control" type="text" id="description" name="description"
                       placeholder="Краткое описание..." value="{{ $post->description }}" required>
            </div>

            <div class="form-group">
                <label for="content">Основной текст</label>
                <textarea class="form-control" name="content" id="content" cols="30" rows=12
                          required>{{ $post->content }}</textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Обновить</button>
            </div>

        </form>
    </div>

@endsection
