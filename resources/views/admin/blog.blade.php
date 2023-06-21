@extends('layouts.admin', ['title' => env('APP_NAME') . ' - Блог Админка'])

@section('header')
    Блог Админка
@endsection

@section('content')

    <div class="mb-3"><a href="{{ route('blog_form') }}">Создать новый пост</a></div>

    <div>
        @foreach($posts as $post)
            <div class="card desktop">
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название поста</th>
                            <th>Краткое описание</th>
                            <th>Картинка</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="align-middle">{{ $post->id }}</td>
                            <td class="align-middle">{{ $post->title }}</td>
                            <td class="align-middle">{{ Illuminate\Support\Str::of($post->description)->words(4, ' ...') }}</td>
                            <td class="align-middle"><img src="{{ asset('/storage/' . $post->image_url) }}" width="25px"
                                     alt="картинка поста"></td>
                            <td class="align-middle">
                                <form action="{{ route('post.edit', $post) }}" method="post">
                                    @csrf
                                    <button class="button-finish" type="submit">
                                        <i class="nav-icon fas fa-edit"></i>
                                    </button>
                                </form>
                            </td>
                            <td class="align-middle">
                                <form action="{{ route('post.delete', $post) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="button-finish" type="submit"><i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        @endforeach
    </div>

    @foreach($posts as $post)
        <div class="card mobile">
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr class="mobile">
                        <td class="mobile-td">ID</td>
                        <td>{{ $post->id }}</td>
                    </tr>
                    <tr class="mobile">
                        <td class="mobile-td">Название поста</td>
                        <td>{{ $post->title }}</td>
                    </tr>
                    <tr class="mobile">
                        <td class="mobile-td">Краткое описание</td>
                        <td>{{ Illuminate\Support\Str::of($post->description)->words(4, ' ...') }}</td>
                    </tr>
                    <tr class="mobile">
                        <td class="mobile-td">Картинка</td>
                        <td><img src="{{ asset('/storage/' . $post->image_url) }}" width="25px"
                                 alt="картинка поста"></td>
                    </tr>

                    <tr class="mobile">
                        <td>
                            <form action="{{ route('post.edit', $post) }}" method="post">
                                @csrf
                                <button class="button-finish" type="submit">
                                    <i class="nav-icon fas fa-edit"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr class="mobile">
                        <td>
                            <form action="{{ route('post.delete', $post) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="button-finish" type="submit"><i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    @endforeach


@endsection
