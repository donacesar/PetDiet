@extends('layouts.admin', ['title' => env('APP_NAME').' Админка - расширенные заявки'])

@section('header')
    Расширенные заявки
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
                    <th class="al-center">Завершить</th>
                    <th class="al-center">Удалить</th>
                </tr>
                </thead>
                <tbody>
                @foreach($full_orders as $full_order)

                    <tr>
                        <td><a href="{{ route('full_order.show', $full_order) }}">{{ $full_order->created_at->format('d/m/Y h:m:i') }}</a></td>
                        <td><a href="{{ route('full_order.show', $full_order) }}">{{ $full_order->name }}</a></td>
                        <td>
                            <a href="tel:{{ phoneFilter($full_order->phone) }}">{{ phoneFilter($full_order->phone) }}</a>
                        </td>
                        <td>{{ $full_order->email }}</td>
                        <td class="al-center">
                            @if($full_order->favorite_phone === 1)
                                <i class="fas fa-phone"></i>&nbsp;
                            @endif
                            @if($full_order->favorite_email === 1)
                                <i class="far fa-envelope"></i>&nbsp;
                            @endif
                            @if($full_order->favorite_whatsapp === 1)
                                <i class="fab fa-whatsapp"></i>&nbsp;
                            @endif
                            @if($full_order->favorite_telegram === 1)
                                <i class="fab fa-telegram-plane"></i>
                            @endif
                        </td>
                        <td class="al-center">
                            @if(!$full_order->finished === true)
                                <form action="{{ route('full_order.finish', $full_order->id) }}" method="post">
                                    @csrf
                                    @method('patch')
                                    <button class="button-finish" type="submit"><i class="fas fa-check"></i>
                                    </button>
                                </form>
                            @else
                                <i class="fas fa-flag-checkered"></i>
                            @endif
                        </td>
                        <td class="al-center">
                            <form action="{{ route('full_order.delete', $full_order) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="button-finish" type="submit"><i class="far fa-trash-alt"></i>
                                </button>
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



    @foreach($full_orders as $full_order)
        <div class="card mobile">

            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr class="mobile">
                        <td class="mobile-td" class="mobile">Время</td>
                        <td><a href="{{ route('full_order.show', $full_order) }}">{{ $full_order->created_at->format('d/m/Y h:m:i') }}</a></td>
                    </tr>
                    <tr class="mobile">
                        <td class="mobile-td" class="mobile">Имя</td>
                        <td><a href="{{ route('full_order.show', $full_order) }}">{{ $full_order->name }}</a></td>
                    </tr>
                    <tr class="mobile">
                        <td class="mobile-td">Телефон</td>
                        <td>
                            <a href="tel:{{ phoneFilter($full_order->phone) }}">{{ phoneFilter($full_order->phone) }}</a>
                        </td>
                    </tr>
                    <tr class="mobile">
                        <td class="mobile-td">Email</td>
                        <td>{{ $full_order->email }}</td>
                    </tr>
                    <tr class="mobile">
                        <td class="mobile-td">Связь</td>
                        <td>
                            @if($full_order->favorite_phone === 1)
                                <i class="fas fa-phone"></i>&nbsp;
                            @endif
                            @if($full_order->favorite_email === 1)
                                <i class="far fa-envelope"></i>&nbsp;
                            @endif
                            @if($full_order->favorite_whatsapp === 1)
                                <i class="fab fa-whatsapp"></i>&nbsp;
                            @endif
                            @if($full_order->favorite_telegram === 1)
                                <i class="fab fa-telegram-plane"></i>
                            @endif
                        </td>
                    </tr>
                    <tr class="mobile">
                        <td>Завершить</td>
                        <td>
                            @if(!$full_order->finished === true)
                                <form action="{{ route('full_order.finish', $full_order->id) }}" method="post">
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
                            <form action="{{ route('full_order.delete', $full_order) }}" method="post">
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



