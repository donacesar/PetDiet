@extends('layouts.admin', ['title' => env('APP_NAME').' Админка - простые заявки'])

@section('header')
    Простые заявки
@endsection

@section('content')

    <div class="card desktop">

        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap table-desktop">
                <thead>
                <tr>
                    <th>Время</th>
                    <th>Имя</th>
                    <th>Телефон</th>
                    <th>Email</th>
                    <th>Связь</th>
                    <th>Услуга</th>
                    <th>Завершить</th>
                    <th>Удалить</th>
                </tr>
                </thead>
                <tbody>
                @foreach($small_orders as $small_order)
                    <tr>
                        <td>{{ $small_order->created_at->format('d/m/Y h:m:i') }}</td>
                        <td>{{ $small_order->name }}</td>
                        <td>
                            <a href="tel:+{{ phoneFilter($small_order->phone) }}">+{{ phoneFilter($small_order->phone) }}</a>
                        </td>
                        <td>{{ $small_order->email }}</td>
                        <td class="al-center">{!! favorite_connectionFilter($small_order->favorite_connection) !!}</td>
                        <td>{{ $small_order->orderService->category }}</td>
                        <td class="al-center">
                            @if(!$small_order->finished === true)
                                <form action="{{ route('small_order.finish', $small_order->id) }}" method="post">
                                    @csrf
                                    @method('patch')
                                    <button class="button-finish" type="submit"><i class="fas fa-check"></i></button>
                                </form>
                            @else
                                <i class="fas fa-flag-checkered"></i>
                            @endif
                        </td>
                        <td class="al-center">
                            <form action="{{ route('small_order.delete', $small_order) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="button-finish" type="submit"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->



    @foreach($small_orders as $small_order)
        <div class="card mobile">

            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr class="mobile">
                        <td class="mobile-td" class="mobile">Время</td>
                        <td>{{ $small_order->created_at->format('d/m/Y h:m:i') }}</td>
                    </tr>
                    <tr class="mobile">
                        <td class="mobile-td" class="mobile">Имя</td>
                        <td>{{ $small_order->name }}</td>
                    </tr>
                    <tr class="mobile">
                        <td class="mobile-td">Телефон</td>
                        <td>
                            <a href="tel:+{{ phoneFilter($small_order->phone) }}">+{{ phoneFilter($small_order->phone) }}</a>
                        </td>
                    </tr>
                    <tr class="mobile">
                        <td class="mobile-td">Email</td>
                        <td>{{ $small_order->email }}</td>
                    </tr>
                    <tr class="mobile">
                        <td class="mobile-td">Связь</td>
                        <td>{!! favorite_connectionFilter($small_order->favorite_connection) !!}</td>
                    </tr>
                    <tr class="mobile">
                    <td>Услуга</td>
                        <td>{{ $small_order->orderService->category }}</td>
                    </tr>
                    <tr class="mobile">
                    <td>Завершить</td>
                        <td>
                            @if(!$small_order->finished === true)
                                <form action="{{ route('small_order.finish', $small_order->id) }}" method="post">
                                    @csrf
                                    @method('patch')
                                    <button class="button-finish" type="submit"><i class="fas fa-check"></i></button>
                                    <style>

                                    </style>
                                </form>
                            @else
                                <i class="fas fa-flag-checkered"></i>
                            @endif
                        </td>
                    </tr>
                    <tr class="mobile">
                    <td>Удалить</td>
                        <td>
                            <form action="{{ route('small_order.delete', $small_order) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="button-finish" type="submit"><i class="far fa-trash-alt"></i></button>
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



