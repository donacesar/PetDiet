@extends('layouts.admin',['title' => env('APP_NAME').' Админка'])

@section('header')
Смена логина и/или пароля
    @endsection
@section('content')
    <div class="min-h-screen flex flex-col sm:justify-start align-items-start pt-6 sm:pt-0 bg-gray-100">

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{ route('store.password') }}">
            @csrf
            <!-- Name -->
                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">
                        Логин
                    </label>
                    <input
                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                        id="name" type="text" name="name" required="required" autofocus="autofocus"
                        value="{{ auth()->user()->name }}" autocomplete="name">
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700" for="password">
                        Новый пароль
                    </label>

                    <input
                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                        id="password" type="password" name="password" required="required" autocomplete="new-password">

                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700" for="password_confirmation">
                        Подтверждение пароля
                    </label>

                    <input
                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                        id="password_confirmation" type="password" name="password_confirmation" required="required"
                        autocomplete="new-password">

                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ml-4">
                        Отправить
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
